<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        return view('collections.index');
    }

    public function add()
    {
        return view('collections.add');
    }

    public function edit()
    {
        return view('collections.edit');
    }

    public function table()
    {
        return view('collections.table');
    }
}
