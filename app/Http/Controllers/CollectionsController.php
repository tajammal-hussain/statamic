<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        $firstCol = "Title";
        $secondCol = "Entries";
        $data = Collections::all();
        return view('collections.index', compact('firstCol', 'secondCol', 'data'));
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
