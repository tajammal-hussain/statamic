<?php

namespace App\Http\Controllers;

use App\Models\Taxonomies;
use App\Models\Collections;
use App\Models\TaxonomyTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class TaxonomiesController extends Controller
{
    public function index()
    {
        $data['columns'] = [
            ['name' => 'Title'],
            ['name' => 'Terms'],
        ];
        $data['data'] = Taxonomies::all();
        return view('taxonomies.index', $data);
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
            $taxonomies = [
                'title' => $request->input('title'),
                'handle' => $request->input('handle'),
            ];
            Taxonomies::insert($taxonomies);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Collection created successfully.');
        else :
            return view('taxonomies.add');
        endif;
    }

    public function edit(Request $request)
    {
        $taxonomyId = $request->segment(count($request->segments()));
        $data['taxonomies'] = Taxonomies::where(['id' => $taxonomyId])->first();
        if ($request->isMethod('post')) :
            // {"revisions":false,"preview_targets":[{"label":"Term","format":"{permalink}","refresh":true}]}
            $selectedCollections[] = $request->input('collections');

            $rules = ['title' => 'required|string|max:255'];

            $validatedData = $request->validate($rules);
            $taxonomyData = ["collections" => $selectedCollections];
            $handle = preg_replace('/[^a-zA-Z0-9]/', '-', $validatedData['title']);
            // Convert data to JSON format
            $jsonData = json_encode($taxonomyData);
            $mytime = Carbon::now();
            $taxonomy = [
                'settings' => $jsonData,
                'title' => $validatedData['title'],
                'handle' => $handle,
                'updated_at' => $mytime->toDateTimeString(),
            ];

            $collectionsArray = explode(',', $selectedCollections[0]);

            foreach ($collectionsArray as $collection) :
                $existingSettings = Collections::where('handle', $collection)->value('settings');

                $existingSettingsArray = json_decode($existingSettings, true);

                $mergedSettings = array_merge_recursive($existingSettingsArray ?? [], ["taxonomies" => $data['taxonomies']->handle]);

                Collections::where('handle', $collection)->update(['settings' => json_encode($mergedSettings)]);
            endforeach;

            Taxonomies::where('id', $taxonomyId)->update($taxonomy);
            // Redirect back with success message
            return redirect()->back()->with('success', 'taxonomy has been updated successfully.');
        else :
            $data['collections'] = Collections::all();
            return view('taxonomies.edit', $data);
        endif;
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
            TaxonomyTerms::where('id', $termId)->update($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Term updated successfully.');
        else :
            $data['taxonomyTerms'] = TaxonomyTerms::where(['id' => $termId])->first();
            $data['taxonomy'] = Taxonomies::where(['handle' => $data['taxonomyTerms']->taxonomy])->first();
            return view('taxonomies.editTerm', $data);
        endif;
    }
}
