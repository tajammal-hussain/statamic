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

    public function table(Request $request){
//        $email = $request->segment(count($request->segments()));

//// Query the 'users' table and join with 'roles'
//        $user = User::where('email', $email)
//            ->leftJoin('roles', 'users.id', '=', 'roles.id')
//            ->select('users.*', 'roles.name as role_name')
//            ->first();
//
//// Check if the user exists
//        $data['user'] = $user ? $user : false;
//
//// Return the user data to the view
//        return view('users.edit', $data);
        // Get the authenticated user
        $authenticatedUser = Auth::user();

        // Get the email from the request URL segment
        $email = $request->segment(count($request->segments()));

        // If the authenticated user's email matches the requested email, proceed
        if ($authenticatedUser && $authenticatedUser->email === $email) {
            // Query the 'users' table and join with 'roles'
            $user = User::where('email', $email)
                ->leftJoin('roles', 'users.id', '=', 'roles.id')
                ->select('users.*', 'roles.name as role_name')
                ->first();

            // Check if the user exists
            $data['user'] = $user ? $user : false;

            // Return the user data to the view
            return view('users.edit', $data);
        } else {
            // If the authenticated user's email does not match the requested email, redirect to login
            return $this->index()->with('error', 'Unauthorized access.');
        }


    }
//    public function changePassword(Request $request)
//    {
//        $request->validate([
//            'current_password' => 'required',
//            'password' => 'required|min:8|confirmed',
//        ]);
//
//        $user = Auth::user();
//
//        // Check if the current password matches the user's actual current password
//        if (!Hash::check($request->current_password, $user->password)) {
//            return redirect()->back()->with('error', 'Current password is incorrect.');
//        }
//
//        // Update the user's password with the new one
//        $user->password = Hash::make($request->password);
//        $user->save();
//
//        return redirect()->back()->with('success', 'Password changed successfully.');
//    }
//    public function update(Request $request, $email)
//    {
//        $user = User::where('email', $email)->first();
//        Validator::make((array)$request, [
//            'name' => 'required|max:255|unique:users,name,'.$user->id,
//            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
//        ]);
//
//        $input = $request->only('name','email');
//
//        $user->update($input);
//        return back()->with('success', 'Profile Updated successfully.');
//    }
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => ['sometimes', 'required', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['sometimes', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg', 'max:8192'],
            'role' => ['sometimes', 'required', 'string', Rule::in(['admin', 'user'])], // Adjust this based on your roles
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
        $user->save();

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



    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Verify the current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully.');
    }

}
