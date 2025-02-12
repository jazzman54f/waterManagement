<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the MongoDB collection
        $users = User::all(); // Adjust this if you have specific query conditions
        $user = Auth::user(); // Fetch the authenticated user
        return view('admin.users', compact('users', 'user')); // Pass both users and authenticated user to the view
    }

    // Display the user creation form
    public function create()
    {
        return view('admin.create_user'); // Create a new view for user creation
    }

    // Store a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Create the user with hashed password
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);
    
            // Redirect to the admin dashboard with a success message
            return redirect()->route('admin.users')->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create user: ' . $e->getMessage())->withInput();
        }
    }

    // Display the edit user form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user')); // Create a new view for editing user
    }

    // Update a user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}
