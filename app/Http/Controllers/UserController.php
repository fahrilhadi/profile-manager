<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // validate form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:users',
            'photo' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $userProfile = User::findOrFail(Auth::id());

        // check if photo is uploaded
        if ($request->hasFile('photo')) {

            // upload new photo
            $photo = $request->file('photo');
            $photo->storeAs('profile', $photo->hashName());

            // delete old photo
            Storage::delete('profile/'.$userProfile->photo);

            // update user profile with new photo
            $userProfile->update([
                'photo' => $photo->hashName(),
                'name' => $request->name,
                'email' => $request->email,
            ]);

        } else {

            // update user profile without photo
            $userProfile->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        // redirect back
        return back()->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
