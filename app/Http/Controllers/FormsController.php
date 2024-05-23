<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formsInfo = Forms::all();

        return view('forms.index', compact('formsInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        $formData = [
            'honeypot' => null,
            'isStoreSubmission' => null,
        ];

        // Convert data to JSON format
        $jsonData = json_encode($formData);

        $form = new Forms();
        $form = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            'handle' => $validatedData['handle'],
            'created_at' => getCurrentTime(),
        ];
        Forms::insert($form);

        return redirect()->route('forms.edit', $validatedData['handle']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $handle)
    {
        $form = Forms::where(['handle' => $handle])->firstOrFail();

        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $handle)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'honeypot' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        $formData = [
            'honeypot' => $validatedData['honeypot'],
            'isStoreSubmission' => $request->input('storeSubmission'),
        ];

        // Convert data to JSON format
        $jsonData = json_encode($formData);
        $form = [
            'settings' => $jsonData,
            'title' => $validatedData['title'],
            'handle' => $handle,
            'updated_at' => getCurrentTime(),
        ];

        Forms::where('handle', $handle)->update($form);
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $handle)
    {
        $res = deleteContent("Forms", ['handle' => $handle]);
        return redirect()->route('forms.index')->with($res);
    }
}
