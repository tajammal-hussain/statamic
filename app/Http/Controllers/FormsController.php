<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
    public function add()
    {
        return view('forms.add');
    }
    public function edit()
    {
        return view('forms.edit');
    }
    public function table()
    {
        return view('forms.table');
    }
    public function view()
    {
        return view('forms.view');
    }
}
