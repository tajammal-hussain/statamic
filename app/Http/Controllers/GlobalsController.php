<?php

namespace App\Http\Controllers;

use App\Models\Globals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GlobalsController extends Controller
{
    public function index()
    {
        $data['columns'] = [
            ['name' => 'Title'],
            ['name' => 'handle'],
        ];
        $data['data'] = Globals::where(['status' => 1])->get();
        return view('globals.index', $data);
    }

    public function add(Request $request)
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

            $entryData = ['tagline' => null];
            $jsonData = json_encode($entryData);
            $globals = new Globals();
            // Save data to the database
            $globals = [
                'settings' => $jsonData,
                'title' => $request->input('title'),
                'handle' => $request->input('handle'),
            ];
            Globals::insert($globals);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Collection created successfully.');
        else :
            return view('globals.add');
        endif;
    }

    public function edit(Request $request)
    {
        $globalId = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :

            $rules = [
                'name' => 'required|string|max:255',
                'tagline' => 'required|string|max:255',
            ];

            $validatedData = $request->validate($rules);

            $globalsData = [
                "tagline" => $validatedData['tagline'],
            ];
            $handle = preg_replace('/[^a-zA-Z0-9]/', '-', $validatedData['name']);
            $jsonData = json_encode($globalsData);
            $global = [
                'settings' => $jsonData,
                'title' => $validatedData['name'],
                'handle' => $handle,
            ];
            Globals::where('id', $globalId)->update($global);
            return redirect()->back()->with('success', 'Global has been updated successfully.');
        else :
            $query = Globals::where(['id' => $globalId])->first();
            $data['globals'] = $query ?? false;
            return view('globals.edit', $data);
        endif;
    }

    public function delete(Request $request)
    {
        $globalId = $request->segment(count($request->segments()));
        $query = Globals::where(['id' => $globalId])
            ->update(['status' => "0"]);

        return redirect()->back()->with(($query) ? 'success' : 'error', ($query) ? 'Global has been deleted successfully.' : "Something went wrong while deleting");
    }

    public function configure()
    {
        return view('globals.configure');
    }
}
