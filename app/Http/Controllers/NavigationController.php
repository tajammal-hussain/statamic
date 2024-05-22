<?php

namespace App\Http\Controllers;

use App\Models\Navigations;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            ['name' => 'Title'],
        ];
        $navigationsInfo = Navigations::where(['status' => "1"])->get();

        return view('navigations.index', compact('columns', 'navigationsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('navigations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        $navigation = new Navigations();
        $navigation = [
            'title' => $validatedData['title'],
            'handle' => $validatedData['handle'],
        ];
        Navigations::insert($navigation);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Collection created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {
        $navigation = Navigations::where(['handle' => $handle])->firstOrFail();
        $collections = Collections::all();
        return view('navigations.edit', compact('navigation', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $selectedCollections[] = $request->input('collections');
        $rules = ['title' => 'required|string|max:255'];

        $validatedData = $request->validate($rules);
        $navigationData = [
            'max_depth' => $request->input('max_depth'),
            "collections" => $selectedCollections,
        ];
        // Convert data to JSON format
        $jsonData = json_encode($navigationData);
        $navigation = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            'handle' => $handle,
            'updated_at' => getCurrentTime(),
        ];

        Navigations::where('handle', $handle)->update($navigation);
        // Redirect back with success message
        return redirect()->back()->with('success', 'Navigation has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        $res = deleteContent("Navigations", ['handle' => $handle]);
        return redirect()->route('navigations.index')->with($res);
    }
}
