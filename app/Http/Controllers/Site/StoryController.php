<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $stories = Story::where('user_id', '!=', auth()->user()->id)->get();
            $myStories = Story::where('user_id', auth()->user()->id)->get();
            return view('site.story', compact('stories', 'myStories'));
        } else {
            $stories = Story::all();

            return view('site.story', compact('stories'));
        }
    }

    public function show()
    {
        return view('site.my_story');
    }

    public function store(Request $request)
    {
        if (!Auth::user()) {
            session()->flash('message', 'برجاء تسجيل الدخول اولا');
            return back();
        }
        Story::create([
            'user_id' => auth()->user()->id,
            'story' => $request->story,
            'published_at' => Carbon::parse(now())->format('Y-m-d'),
        ]);

        return redirect('/user/stories');
    }
}
