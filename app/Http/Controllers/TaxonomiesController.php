<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxonomiesController extends Controller
{
    public function index()
    {
        return view('taxonomies.index');
    }
}
