<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('navigations.index');
    }

    public function add()
    {
        return view('navigations.add');
    }

    public function edit()
    {
        return view('navigations.edit');
    }

    public function table()
    {
        return view('navigations.table');
    }
}
