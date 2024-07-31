<?php

namespace App\Http\Controllers\Auth;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $cities = City::all();
        return view('homePages.auth.register', compact(['cities','user']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'city_id' => 'required|exists:cities,id',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $picturePath = null;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = 'assets/images/profileImages';
            $file->move(public_path($destinationPath), $filename);
            $picturePath = $destinationPath . '/' . $filename;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->picture = $picturePath;
        $user->city_id = $request->city_id;
        $user->role_id = Role::where('name', 'User')->first()->id;
        $user->save();

        // Optionally, redirect with a success message or to a specific route.
        return redirect(RouteServiceProvider::LOGIN)->with('success', 'User created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
