<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Collections, Taxonomies};

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            ['name' => 'Title'],
            ['name' => 'Entries'],
        ];

        $collectionsInfo = Collections::withCount('entries')->get();
        return view('collections.index', compact('columns', 'collectionsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collections.create');
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

        $data = [
            'route' => null,
            'slug' => 1,
            'title_formats' => null,
            'publish' => 1,
            'entry_link' => 0,
            'sort_dir' => "Ascending",
            'orderable' => 0,
            'taxnomies' => null
        ];

        $jsonData = json_encode($data);
        $collection = new Collections();

        $collection = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            'handle' => $validatedData['handle'],
        ];
        Collections::insert($collection);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Collection created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {

        $collection = Collections::where(['handle' => $handle])->firstOrFail();
        $taxonomies = Taxonomies::all();

        return view('collections.edit', compact('collection', 'taxonomies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_format' => 'required|string|max:255',
            'route_name' => 'required|string|max:255',
        ]);
        $selectedTaxonomies = $request->input('taxonomies');

        $data = [
            'route' => $request->route_name,
            'slug' => $request->slugState,
            'title_formats' => $request->title_format,
            'publish' => $request->publishState,
            'entry_link' => $request->links,
            'sort_dir' => $request->sort_direction,
            'orderable' => $request->orderable,
            'taxonomies' => $selectedTaxonomies
        ];

        $jsonData =  json_encode($data);

        $collection = [
            'settings' => $jsonData,
            'title' => $request->title,
        ];
        Collections::where('handle', $handle)->update($collection);
        // Redirect back with success message
        return redirect()->back()->with('success', 'collection has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        $res = deleteContent("Collections", ['handle' => $handle]);
        return redirect()->route('collections.index')->with($res);
    }
}
