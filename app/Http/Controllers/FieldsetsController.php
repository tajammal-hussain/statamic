<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldsetsController extends Controller
{
    public function index()
    {
        return view('fieldsets.index');
    }
}
