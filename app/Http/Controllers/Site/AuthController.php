<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use App\Http\Requests\Site\RegisterRequest;
use App\Http\Requests\Site\UpdateProfileRequest;

use App\Models\User;
use App\Notifications\NewUserNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->except('password');
        $data['password'] = bcrypt($request->password);
        Carbon::setLocale('ar');
        $user = User::create($data);
        $data['title'] = "مستخدم جديد علي الموقع ( " . $user->name . " )";

        $data['body'] = " سجل يوم  " . Carbon::parse(now())->translatedFormat('Y-m-d');

        \App\Models\Notification::create([
            'id' => Str::uuid()->toString(),
            'type' => "App\Notifications\NotifyAdmin",
            'notifiable_type' => 'Admin',
            'notifiable_id' => 1,
            'data' => json_encode($data),
        ]);

        return view('site.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
//            $query = User::query();
////            $query->where('user_type', 'user');
////
////            $newUsers = $query->latest()->limit(10)->get();
////
////            $mostPopular = $query->get();
            return redirect()->to('/');
//            return view('welcome', compact('mostPopular', 'newUsers'));
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
//        dd(\auth()->user()->currentPackage());
        return view('site.profile');
    }

    public function updateProfile(User $user, UpdateProfileRequest $request)
    {

        $user->update($request->all());
        return back();
    }
}
