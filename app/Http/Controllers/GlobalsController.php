<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalsController extends Controller
{
    public function index()
    {
        return view('globals.index');
    }
}
