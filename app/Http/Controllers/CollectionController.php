<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Collections;
use Illuminate\Support\Facades\Validator;
use App\Models\Entries;

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

        $collection = new Collections();
        $collection = [
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
    public function edit(string $id)
    {
        return view('collections.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        try {
            Collections::where('handle', $handle)->first()->delete();
            return redirect()->back()->with('success', 'Collection deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
