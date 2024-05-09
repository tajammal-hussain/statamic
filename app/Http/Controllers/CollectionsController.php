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
        $data['columns'] = [
            ['name' => 'Title'],
            ['name' => 'Entries'],
        ];
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
            $collection = [
                'title' => $request->input('title'),
                'handle' => $request->input('handle'),
            ];
            Collections::insert($collection);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Collection created successfully.');
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

            $validatedData = $request->validate($rules);

            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'author' => $validatedData['author'],
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
            $entry = new Entries();
            $mytime = Carbon::now();
            $entry = [
                'data' => $jsonData,
                'slug' => $validatedData['slug'],
                'site' => $validatedData['slug'],
                'published' => $isPublished ? "1" : "0",
                'status' => $isPublished ? "published" : "pending",
                'date' => $mytime->toDateTimeString(),
                'collection' => $handle,
            ];
            Entries::insert($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Entry added successfully.');
        else :
            $data['collection'] = Collections::where(['handle' => $handle])->first();
            return view('collections.addEntry', $data);
        endif;
    }

    public function editEntry(Request $request)
    {
        $entryId = $request->segment(count($request->segments()));
        if ($request->isMethod('post')) :
            $isEnabled = $request->input('enableState');
            $isPublished = $request->input('publishState');

            $rules = [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'slug' => 'required|string',
                'author' => 'required|string',
            ];

            $validatedData = $request->validate($rules);

            $entryData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'author' => $validatedData['author'],
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
            $mytime = Carbon::now();

            $entry = [
                'data' => $jsonData,
                'slug' => $validatedData['slug'],
                'site' => $validatedData['slug'],
                'published' => $isPublished ? "1" : "0",
                'status' => $isPublished ? "published" : "pending",
                'date' => $mytime->toDateTimeString(),
            ];

            // Assuming $entryid holds the ID of the entry you want to update
            Entries::where('id', $entryId)
                ->update($entry);
            // Redirect back with success message
            return redirect()->back()->with('success', 'Entry added successfully.');
        else :
            $data['entries'] = Entries::where(['id' => $entryId])->first();
            $data['collection'] = Collections::where(['handle' => $data['entries']->collection])->first();
            return view('collections.editEntry', $data);
        endif;
    }

    public function editCollection(Request $request)
    {
        if ($request->isMethod('post')) :
        else :
            return view('collections.editCollection');
        endif;
    }

    public function table(Request $request)
    {
        // Getting URI Segment
        $handle = $request->segment(count($request->segments()));
        $data['collection'] = Collections::where(['handle' => $handle])->first();
        $data['entries'] = Entries::where(['collection' => $handle])->get();

        return view('collections.table', $data);
    }
}
