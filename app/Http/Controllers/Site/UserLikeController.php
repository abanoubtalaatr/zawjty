<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class UserLikeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $usersLikesMe = Like::where('receiver_id', auth()->id())->with('sender')->get();
            return view('site.user_likes_me', compact('usersLikesMe'));
        }
    }

    public function ILikes()
    {
        if (auth()->check()) {
            $ILikesUsers = Like::where('sender_id', auth()->id())->with('receiver')->get();
//            dd($ILikesUsers[0]->receiver->name);
            return view('site.I_like_users', compact('ILikesUsers'));
        }
    }

    public function like(User $user)
    {
        Like::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $user->id,
        ]);

        return back();
    }

    public function dislike(User $user)
    {
        Like::where('sender_id', auth()->id())->where('receiver_id', $user->id)->first()->delete();
        return back();
    }
}
