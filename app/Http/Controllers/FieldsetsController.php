<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldsetsController extends Controller
{
    public function index()
    {
        return view('fieldsets.index');
    }
    public function add()
    {
        return view('fieldsets.add');
    }
    public function edit()
    {
        return view('fieldsets.edit');
    }
    public function table()
    {
        return view('fieldsets.table');
    }
}
