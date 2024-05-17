<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fieldsets;

class FieldsetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $columns = [
                ['name' => 'Title'],
                ['name' => 'Handle'],
                ['name' => 'Fields'],
            ];
    
            $fieldsetsInfo = Fieldsets::all();
    
            return view('fieldsets.index', compact('columns', 'fieldsetsInfo'));
        
    }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fieldsets.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
        ]);

        $data = [
            'title' => $request->title,
            'fields'=>[]
        ];
        $jsonData =  json_encode($data);
        // Create a new Fieldset instance
        $fieldset = new Fieldsets();
        $fieldset->data = $jsonData;
        $fieldset->handle = $request->handle;
        // If you have more fields in the form, you can assign them here

        // Save the Fieldset to the database
        $fieldset->save();

        // Redirect back or to any other route after successful insertion
        return redirect()->route('fieldsets.edit',$fieldset->id);
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
    public function edit(string $id)
    {
        $fieldset = Fieldsets::findOrFail($id);
    
        // Return the edit view with the fieldset data
        return view('fieldsets.edit', compact('fieldset'));
    }

    /**
     * Update the specified resource in storage.
     */
    

    public function update(Request $request,string $id)
{
    
   
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    

    $fieldset = Fieldsets::findOrFail($id);

   
    $fieldset->data = json_encode(['title' => $request->title, 'fields' => []]);

    
    $fieldset->save();

    
    return redirect()->route('fieldsets.edit',compact('fieldset'))->with('success', 'Fieldset updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $fieldset = Fieldsets::findOrFail($id);

        $fieldset->delete();
    
      
        return redirect()->route('fieldsets.index')->with('success', 'Fieldset deleted successfully');
    }
}
