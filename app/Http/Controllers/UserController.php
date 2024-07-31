<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showCoaches()
    {
        $user = Auth::user();

        return view('homePages.coaches', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateRole(Request $request)
    {
        $userId = $request->input('userId');
        $roleId = $request->input('id');

        // Find the user
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Update the user's role
        $user->role_id = $roleId;
        $user->save();

        return response()->json(['message' => 'Role updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser($userId)
    {
        $user = User::find($userId);

        $user->delete();

        return redirect()->route('home')->with('success', 'You have been successfully logged out!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('success', 'You have been successfully logged out!');
    }
}
