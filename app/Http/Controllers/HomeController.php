<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Course;
use App\Models\CRP;
use App\Models\CrpImageSlider;
use App\Models\CrpMoreInfo;
use App\Models\CrpVideoSlider;
use App\Models\Event;
use App\Models\Executive;
use App\Models\Facilitator;
use App\Models\OurMembership;
use App\Models\Partner;
use App\Models\Publish;
use App\Models\Resuscitation;
use App\Models\Trainer;
use App\Models\TrainingProgram;
use App\Models\UpcommingCourse;
use App\Models\UpcommingExam;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use function auth;
use function view;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function dashboard()
    {
        //prevent any user go to admin panel
        if (isset(auth()->user()->user_type) && auth()->user()->user_type != 'user') {
            if (!auth()->check()) {
                return view('auth.login');
            }
            return view('home');
        } else {
            return view('auth.login');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::all();
        $members = OurMembership::all();

        return view('home', compact('events', 'members'));
    }


    public function userRegister()
    {
        return view('site.register');
    }

    public function userLogin()
    {
        return view('site.login');
    }

    public function contactUs()
    {
        return view('site.contactus');
    }
}
