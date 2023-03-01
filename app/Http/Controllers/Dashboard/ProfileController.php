<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable|string|min:6|max:32|confirmed',
        ]);

        $user = User::find(auth()->user()->id);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()->route('profile.show')
            ->with('success', 'profile updated successfully.');
    }

    public function image()
    {
        return view('site.image');
    }

    public function imagePost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('users'), $imageName)->getFilename();

        $user = User::find(Auth::user()->id);

        $user->update(['image' => $imageName]);

        return back()
            ->with('success', 'تم رفع صورتك الشخصية.')
            ->with('image', 'users\\' . $imageName);
    }
}
