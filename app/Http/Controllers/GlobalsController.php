<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalsController extends Controller
{
    public function index()
    {
        return view('globals.index');
    }

    public function add()
    {
        return view('globals.add');
    }

    public function edit()
    {
        return view('globals.edit');
    }
    
    public function configure()
    {
        return view('globals.configure');
    }
}
