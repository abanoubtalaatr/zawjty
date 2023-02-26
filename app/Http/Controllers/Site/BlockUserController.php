<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlockUserController extends Controller
{
    public function index()
    {
        $usersIBlockedThem = Block::where('blocking_person', auth()->user()->id)->with('bannedPerson')->get();
        return view('site.banned', compact('usersIBlockedThem'));
    }

    public function block(User $user)
    {
        Block::updateOrCreate(['blocking_person' => auth()->user()->id, 'banned_person' => $user->id]);
        return back();
    }

    public function unBlockedUser(User $user)
    {
        Block::where('blocking_person', auth()->user()->id)->where('banned_person', $user->id)->delete();
        Session::flash('message',  'تم ازاله المستخدم من قائمة المحظورين');
        return back();
    }
}
