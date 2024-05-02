<?php

namespace App\Http\Controllers;
use App\Models\Navigations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NavigationController extends Controller
{

    public function index()
    {
        $firstCol = 'Title';
        $secondCol = 'Entries';
        $data = Navigations::all();

        return view('navigations.index', compact('firstCol','secondCol', 'data'));

    }

    public function add(Request $request)
    {
        if($request->isMethod('post')) :
            $rules = [
                'title' => 'required|string|max:255',
                'handle' => 'required|string|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) :
                return redirect()->back()->withErrors($validator)->withInput();
            endif;

            $navigation = new Navigations();
            $navigation->title = $request->input('title');
            $navigation->handle = $request->input('handle');
            $navigation->save();

            $request->session()->flash('success', 'Navigation Collection created successfully.');
            return redirect()->route('navigations.add');
        else :
            return view('navigations.add');
        endif;

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
