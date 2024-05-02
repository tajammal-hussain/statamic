<?php

namespace App\Http\Controllers;

use App\Models\Taxonomies;
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

    public function edit()
    {
        return view('taxonomies.edit');
    }

    public function table()
    {
        return view('taxonomies.table');
    }

    public function createTeam()
    {
        return view('taxonomies.createTeam');
    }
}
