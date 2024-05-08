<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    public function index()
    {


        $data['users'] = $this->getUsersAgainstRolls();
        return view('users.index', $data);

    }

    public function edit()
    {
        return view('users.edit');
    }

    protected function getUsersAgainstRolls()
    {
        $authorizedRoles = ['superadmin', 'admin', 'user'];
        $users = User::whereHas('roles', function ($q) use ($authorizedRoles) {
            $q->whereIn('name', $authorizedRoles);
        })
            ->with(['roles' => function ($query) {
                $query->select('name as roleName'); // Select only the name column of roles
            }])
            ->get();


        return $users;
    }

    public function table($id)
    {
       if(Auth::user()->hasRole('superadmin')){
        // Query the 'users' table and join with 'roles'
        $user = User::where('users.id', $id)
            ->leftJoin('roles', 'users.id', '=', 'roles.id')
            ->select('users.*', 'roles.name as role_name')
            ->first();


        // Check if the user exists
        if ($user) {
            // Return the user data to the view
            return view('users.edit', ['user' => $user]);
        } else {
            // If the user does not exist, return an error message or handle accordingly
            return redirect()->back()->with('error', 'User not found.');
        }
       } else{
           return redirect()->back()->with('error', 'Unauthorized access.');
       }
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => ['sometimes', 'required', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['sometimes', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg', 'max:8192'],
            'role' => ['sometimes', 'required', 'string', Rule::in(['superadmin','admin', 'user'])], // Adjust this based on your roles
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        // Update the user's profile if the fields are provided
        if ($request->filled('name')) {
            $user->name = $request->name;
        }
        if ($request->filled('email')) {
            $user->email = $request->email;
        }
        $user->fill($request->except('last_login'))->save();

        // Update user's role if provided
        if ($request->filled('role')) {
            $role = $request->input('role');
            if ($role !== "superadmin") {
                $user->syncRoles([$role]); // This will replace all existing roles with the new role
            }
        }

        // Fetch the user's image URL
        $imageUrl = asset('images/' . $user->image);

        // Return a view with success message and image URL
        return $this->index()->with('success', 'Profile updated successfully.')->with('imageUrl', $imageUrl);
    }


}
