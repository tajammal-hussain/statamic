<?php

namespace App\Http\Controllers;

use App\Models\Taxonomies;
use App\Models\TaxonomyTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TaxonomiesController extends Controller
{
    public function index()
    {
        $firstCol = "Title";
        $secondCol = "Entries";
        $data = Taxonomies::all();
        return view('taxonomies.index', compact('firstCol', 'secondCol', 'data'));
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

            $taxonomies = new Taxonomies();
            $taxonomies->title = $request->input('title');
            $taxonomies->handle = $request->input('handle');
            $taxonomies->save();

            $request->session()->flash('success', 'Taxonomy created successfully.');
            return redirect()->route('taxonomies.add');
        else :
            return view('taxonomies.add');
        endif;
    }

    public function edit(Request $request)
    {
        // {"revisions":false,"preview_targets":[{"label":"Term","format":"{permalink}","refresh":true}]}
        $taxonomyId = $request->segment(count($request->segments()));
        $data['taxonomies'] = Taxonomies::where(['id' => $taxonomyId])->first();
        return view('taxonomies.edit', $data);
    }

    public function table(Request $request)
    {
        // {"title":"testinf taxonomies","content":"this is for testing tzxonomies","updated_by":1,"updated_at":1715082553}
        $handle = $request->segment(count($request->segments()));
        $data['taxonomy'] = Taxonomies::where(['handle' => $handle])->first();
        $data['taxonomyTerms'] = TaxonomyTerms::where(['taxonomy' => $handle])->get();
        return view('taxonomies.table', $data);
    }

    public function createTerm(Request $request)
    {
        $handle = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :
            $isEnabled = $request->input('enableState');

            $rules = [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'slug' => 'required|string|unique:entries,slug',
            ];

            $validatedData = $request->validate($rules);

            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
            ];

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
            $entry = new TaxonomyTerms();
            $entry = [
                'data' => $jsonData,
                'slug' => $validatedData['slug'],
                'site' => $validatedData['slug'],
                'uri' => null,
                'taxonomy' => $handle,
            ];
            TaxonomyTerms::insert($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Entry added successfully.');
        else :
            $data['taxonomy'] = Taxonomies::where(['handle' => $handle])->first();
            return view('taxonomies.createTerm', $data);
        endif;
    }

    public function editTerm(Request $request)
    {
        $termId = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :
            $isEnabled = $request->input('enableState');
            $isPublished = $request->input('publishState');

            $rules = [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'slug' => 'required|string',
            ];

            $validatedData = $request->validate($rules);

            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
            ];

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

            $entry = [
                'data' => $jsonData,
                'slug' => $validatedData['slug'],
                'site' => $validatedData['slug'],
                'uri' => null,
            ];
            // Assuming $termId holds the ID of the entry you want to update
            TaxonomyTerms::where('id', $termId)
                ->update($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Term updated successfully.');
        else :
            $data['taxonomyTerms'] = TaxonomyTerms::where(['id' => $termId])->first();
            return view('taxonomies.editTerm', $data);
        endif;
    }
}
