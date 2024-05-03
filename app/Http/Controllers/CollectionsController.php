<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CollectionsController extends Controller
{
    public function index()
    {
        $firstCol = "Title";
        $secondCol = "Entries";
        $data = Collections::all();
        return view('collections.index', compact('firstCol', 'secondCol', 'data'));
    }

    public function addCollection(Request $request)
    {
        if ($request->isMethod('post')) :
            $rules = [
                'title' => 'required|string|max:255',
                'handle' => 'required|string|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) :
                return redirect()->back()->withErrors($validator)->withInput();
            endif;

            $collection = new Collections();
            $collection->title = $request->input('title');
            $collection->handle = $request->input('handle');
            $collection->save();

            $request->session()->flash('success', 'Collection created successfully.');
            return redirect()->route('collections.addCollection');
        else :
            return view('collections.addCollection');
        endif;
    }

    public function addEntry()
    {
        
        return view('collections.addEntry');
    }

    public function editCollection()
    {
        return view('collections.editCollection');
    }

    public function editEntry()
    {
        return view('collections.editEntry');
    }

    public function table(Request $request)
    {
        // Getting URI Segment
        $data['handle'] = $request->segment(count($request->segments()));
        $query = DB::table('entries')
            ->join('collections', 'entries.collection', '=', 'collections.handle')
            ->where('collections.handle', $data['handle'])
            ->select('*')
            ->get();

        // check if the result is not empty
        $data['entries'] = $query ?? false;

        return view('collections.table', $data);
    }
}
