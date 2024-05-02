<?php

namespace App\Http\Controllers;

use App\Models\Globals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GlobalsController extends Controller
{
    public function index()
    {
        $firstCol = "Title";
        $secondCol = "Entries";
        $data = Globals::all();
        return view('globals.index',compact('firstCol','secondCol', 'data'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) :
            $rules = [
                'title' => 'required|string|max:255',
                'handle' => 'required|string|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) :
                return redirect()->back()->withErrors($validator)->withInput();
            endif;

            $globals = new Globals();
            $globals->title = $request->input('title');
            $globals->handle = $request->input('handle');
            $globals->save();

            $request->session()->flash('success', 'Global created successfully.');
            return redirect()->route('globals.add');
        else :
            return view('globals.add');
        endif;

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
