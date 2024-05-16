<?php

namespace App\Http\Controllers;

use App\Models\Navigations;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class NavigationController extends Controller
{

    public function index()
    {
        $data['columns'] = [
            ['name' => 'Title'],
        ];
        $data['navigationsInfo'] = Navigations::where(['status' => "1"])->get();

        return view('navigations.index', $data);
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

            $navigation = new Navigations();
            $navigation = [
                'title' => $request->input('title'),
                'handle' => $request->input('handle'),
            ];
            Navigations::insert($navigation);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Collection created successfully.');
        else :
            return view('navigations.add');
        endif;
    }

    public function edit(Request $request)
    {
        // {"max_depth":"12","collections":["posts,pages,news_and_articles"]}
        $navigationId = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :
            $selectedCollections[] = $request->input('collections');
            $rules = [
                'title' => 'required|string|max:255',
                'max_depth' => 'required|integer',
            ];

            $validatedData = $request->validate($rules);
            $navigationData = [
                'max_depth' => $validatedData['max_depth'],
                "collections" => $selectedCollections,
            ];
            $handle = preg_replace('/[^a-zA-Z0-9]/', '-', $validatedData['title']);
            // Convert data to JSON format
            $jsonData = json_encode($navigationData);
            $mytime = Carbon::now();
            $navigation = [
                'settings' => $jsonData,
                'title' => $validatedData['title'],
                'handle' => $handle,
                'updated_at' => $mytime->toDateTimeString(),
            ];

            Navigations::where('id', $navigationId)->update($navigation);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Navigation has been updated successfully.');
        else :
            $data['navigations'] = Navigations::where(['id' => $navigationId])->first();
            $data['collections'] = Collections::all();
            return view('navigations.edit', $data);
        endif;
    }

    public function delete(Request $request)
    {
        $navigationId = $request->segment(count($request->segments()));
        $query = Navigations::where(['id' => $navigationId])
            ->update(['status' => "0"]);

        return redirect()->back()->with(($query) ? 'success' : 'error', ($query) ? 'Navigation has been deleted successfully.' : "Something went wrong while deleting");
    }

    public function table(Request $request)
    {
        // Getting URI Segment
        $data['handle'] = $request->segment(count($request->segments()));
        $query = Navigations::where(['handle' => $data['handle']])
            ->first();
        $data['navigation'] = $query ?? false;
        return view('navigations.table', $data);
    }
}
