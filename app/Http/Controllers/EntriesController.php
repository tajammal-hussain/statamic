<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;
use App\Models\Entries;
use Carbon\Carbon;

class EntriesController extends Controller
{
    public function __invoke($handle){
        $collection = Collections::with('entries')->where('handle', $handle)->firstOrFail();
        return view('entries.index', compact('collection'));
    }
    /**
     * Display a listing of the resource.
     */
    // public function index($collectionId)
    // {
    //     $data['collection'] = Collections::findOrFail($collectionId);
    //     $data['entriesInfo'] = Entries::whereBelongsTo($data['collection'])->get();

    //     return view('entries.index', $data);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $collectionId)
    {
        $data['taxonomies'] = Taxonomies::whereRaw("JSON_EXTRACT(settings, '$.collections') LIKE '%$handle%'")->get();
        if ($request->isMethod('post')) :
            $isEnabled = $request->input('enableState');
            $isPublished = $request->input('publishState');

            $rules = [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'slug' => 'required|string|unique:entries,slug',
                'author' => 'required|string',
            ];

            $validatedData = $request->validate($rules);

            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'author' => $validatedData['author'],
            ];

            foreach ($data['taxonomies'] as $taxonomy) :
                $taxonomyHandle = $taxonomy->handle;
                $selectedValues = $request->input($taxonomyHandle);
                $entryData[$taxonomy->handle] = $selectedValues;
            endforeach;

            if ($isEnabled) :
                $metadataRules = [];
                $tagTypes = $request->input('tagType');
                $nameValues = $request->input('nameValue');
                $contentAttributes = $request->input('contentAttribute');

                for ($i = 0; $i < count($tagTypes); $i++) :
                    $metadataRules['tagType.' . $i] = 'required|string';
                    $metadataRules['nameValue.' . $i] = 'required|string';
                    $metadataRules['contentAttribute.' . $i] = 'required|string';
                endfor;

                $rules = array_merge($rules, $metadataRules);

                $validatedData = $request->validate($rules);

                $metadata = [];
                for ($i = 0; $i < count($tagTypes); $i++) :
                    $entry = [
                        'tagType' => $tagTypes[$i],
                        'nameValue' => $nameValues[$i],
                        'contentAttribute' => $contentAttributes[$i]
                    ];

                    $metadata[$i] = $entry;
                endfor;

                $entryData['metaData'] = $metadata;
            endif;

            // Convert data to JSON format
            $jsonData = json_encode($entryData);

            // Save data to the database
            $entry = new Entries();
            $mytime = Carbon::now();
            $entry = [
                'data' => $jsonData,
                'slug' => $validatedData['slug'],
                'site' => $validatedData['slug'],
                'published' => $isPublished ? "1" : "0",
                'isSEOEnabled' => $isEnabled ? "1" : "0",
                'status' => $isPublished ? "published" : "pending",
                'date' => $mytime->toDateTimeString(),
                'collection' => $handle,
            ];
            Entries::insert($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Entry added successfully.');
        else :
            $data['collection'] = Collections::where(['handle' => $handle])->first();
            $data['usersInfo'] = User::all();
            if (!$data['taxonomies']->isEmpty()) : foreach ($data['taxonomies'] as $taxonomy) : $taxonomy->terms = TaxonomyTerms::where('taxonomy', $taxonomy->handle)->get();
                endforeach;
            endif;

            return view('entries.create', $data);
        endif;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
