<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the profile (My Account) page.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('backoffice.profile.index', compact('user'));
    }

    /**
     * Update profile details (name/email), optional password, optional avatar.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'name'          => ['required', 'string', 'max:255'],
            'bio'           => ['nullable', 'string', 'max:1000'],
            'phone'         => ['nullable', 'string', 'max:20'],
            'address'       => ['nullable', 'string', 'max:255'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'password'      => ['nullable', 'string', 'min:8', 'confirmed'],
        ];

        $validated = $request->validate($rules);

        $user->name    = $validated['name'];
        $user->bio     = $validated['bio']     ?? $user->bio;
        $user->phone   = $validated['phone']   ?? $user->phone;
        $user->address = $validated['address'] ?? $user->address;

        // ✅ Handle profile photo via MediaLibrary
        if ($request->hasFile('profile_photo')) {
            $user->clearMediaCollection('avatars');
            $user->addMediaFromRequest('profile_photo')->toMediaCollection('avatars');
        }

        // Optional password update
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('backoffice.profile.edit')->with('success', 'Profile updated successfully.');
    }

    /**
     * Update only the password.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = $request->user();
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('status', 'Password updated successfully.');
    }
}
