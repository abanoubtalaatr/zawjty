<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $visitors = Visit::where('page_owner_id', auth()->id())->with('visitor')->get();
        return view('site.visit_my_profile', compact('visitors'));
    }
}
