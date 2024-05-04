<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Entries;
use Illuminate\Support\Carbon;


class CollectionsController extends Controller
{
    public function index()
    {
        $data['firstCol'] = "Title";
        $data['secondCol'] = "Entries";
        // $data = Collections::all();
        $data['collectionsInfo'] = DB::table('collections')
            ->leftJoin('entries', 'collections.handle', '=', 'entries.collection')
            ->select('collections.id', 'collections.title', 'collections.handle', DB::raw('COUNT(entries.id) as entriesCount'))
            ->groupBy('collections.id', 'collections.title', 'collections.handle')
            ->get();

        return view('collections.index', $data);
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

    public function addEntry(Request $request)
    {
        $handle = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :
            $isEnabled = $request->input('enableState');
            $isPublished = $request->input('publishState');
            $rules = [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'slug' => 'required|string|unique:entries,slug',
                'author' => 'required|string',
            ];
            // Validate the input
            $validatedData = $request->validate($rules);

            // Process the input data
            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'author' => $validatedData['author'],
            ];
            $slug = $validatedData['slug'];
            // Convert data to JSON format
            $jsonData = json_encode($entryData);

            // Save data to the database
            $entry = new Entries();
            $mytime = Carbon::now();
            $entry = [
                'data' => $jsonData,
                'slug' => $slug,
                'site' => $slug,
                'published' => $isPublished ? "1" : "0",
                'status' => $isPublished ? "1" : "0",
                'date' => $mytime->toDateTimeString(),
                'collection' => $handle,
            ];
            Entries::insert($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Entry added successfully.');
        else :
            $data['collections'] = Collections::where(['handle' => $handle])->first();
            return view('collections.addEntry', $data);
        endif;
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
