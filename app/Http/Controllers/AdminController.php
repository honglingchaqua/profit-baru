<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Add logic for admin dashboard
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function showUser($username)
    {
        $user = User::findOrFail($username);
        return view('admin.user-details', compact('user'));
    }

    public function updateUser(Request $request, $username)
    {
        $user = User::findOrFail($username);

        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email,' . $username . ',username',
            'role' => 'required|in:admin,user',
        ]);

        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];
        $user->save();

        return back()->with('status', 'User updated successfully.');
    }

    public function deleteUser($username)
    {
        $user = User::findOrFail($username);
        $user->delete();

        return redirect()->route('admin.users')->with('status', 'User deleted successfully.');
    }

    public function settings()
    {
        // Add logic for admin settings
        return view('admin.settings');
    }

    public function updateSettings(Request $request)
    {
        // Add logic to update admin settings
        // This is just a placeholder, adjust according to your needs
        $validatedData = $request->validate([
            'site_name' => 'required|string',
            'maintenance_mode' => 'boolean',
        ]);

        // Update settings logic here

        return back()->with('status', 'Settings updated successfully.');
    }
}