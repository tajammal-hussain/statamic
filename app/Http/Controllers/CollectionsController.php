<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        return view('collections.index');
    }

    public function addCollection()
    {
        return view('collections.addCollection');
    }

    public function addEntry()
    {
        return view('collections.addEntry');
    }

    public function editCollection()
    {
        return view('collections.editCollection');
    }

    public function editEntry()
    {
        return view('collections.editEntry');
    }

    public function table()
    {
        return view('collections.table');
    }
}
