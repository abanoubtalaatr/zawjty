<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use App\Http\Requests\Site\RegisterRequest;
use App\Http\Requests\Site\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->except('password');
        $data['password'] = bcrypt($request->password);
        
        User::create($data);

        return view('site.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $query = User::query();
            $query->where('user_type', 'user');

            $newUsers = $query->latest()->limit(10)->get();

            $mostPopular = $query->get();

            return view('welcome', compact('mostPopular', 'newUsers'));
        } else {
            return redirect()->back()->with(['error' => 'تـــــاكد من البيانات وجرب مره اخري']);
        }
    }

    public function forgotPassword()
    {
        return view('site.passwords.email');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('/');
    }

    public function showProfile()
    {
        return view('site.profile');
    }

    public function updateProfile(User $user, UpdateProfileRequest $request)
    {
        $user->update($request->all());
        return $this->showProfile();
    }
}
