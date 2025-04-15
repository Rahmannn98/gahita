<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller; // Penting!

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.profile', [
            'title' => 'Profile Saya',
            'user'  => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'nullable|string|max:20',
            'photo'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Disesuaikan dengan name input di blade
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('photo')) {
            if ($user->profile_photo) {
                Storage::delete('public/profile/' . $user->profile_photo);
            }

            $filename = time().'_'.$request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/profile', $filename);

            $user->profile_photo = $filename;
        }
        $user->save();
        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}
