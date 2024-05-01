<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxonomiesController extends Controller
{
    public function index()
    {
        
        return view('taxonomies.index');
    }

    public function add()
    {
        return view('taxonomies.add');
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
