<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{

    public function index()
    {
        $menuItems = [
            ['label' => 'Edit', 'route' => route('navigations.edit')],
            ['label' => 'Delete', 'route' => route('dashboard')],
            // Add more menu items as needed
        ];

        return view('navigations.index')->with('menuItems', $menuItems);

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
