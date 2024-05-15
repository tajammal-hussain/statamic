<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomies;
use Illuminate\Support\Facades\Validator;

class TaxonomiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['columns'] = [
            ['name' => 'Title'],
            ['name' => 'Terms'],
        ];

        $data['taxonomiesInfo'] = Taxonomies::withCount('terms')->get();

        return view('taxonomies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taxonomies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ];

        // Validate the incoming request
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $taxonomy = new Taxonomies();

            $taxonomy->title = $request->input('title');
            $taxonomy->handle = $request->input('handle');

            $taxonomy->save();

            return redirect()->back()->with('success', 'Collection created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create collection. Please try again.');
        }
    }

    /**`
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['taxonomiesInfo'] = Taxonomies::where(['id' => $id])->get();

        return view('taxonomies.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
