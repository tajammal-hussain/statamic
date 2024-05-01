<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxonomiesController extends Controller
{
    public function index()
    {
        $menuItems = [
            ['label' => 'Edit', 'route' => route('navigations.edit')],
            ['label' => 'Delete', 'route' => route('dashboard')],
            // Add more menu items as needed
        ];

        return view('taxonomies.index')->with('menuItems', $menuItems);
    }

    public function add()
    {
        return view('taxonomies.add');
    }

    public function edit()
    {
        return view('taxonomies.edit');
    }

    public function table()
    {
        return view('taxonomies.table');
    }

    public function createTeam()
    {
        return view('taxonomies.createTeam');
    }
}
