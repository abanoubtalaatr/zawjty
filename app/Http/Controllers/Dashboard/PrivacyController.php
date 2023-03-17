<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PrivacyRequest;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::first();

        return view('dashboard.privacy.index', compact('privacy'));
    }

    public function updateOrStore(PrivacyRequest $request)
    {
        $privacy = Privacy::first();
        if ($privacy) {
            $privacy->update(['title' => $request->title, 'description' => $request->description]);
        } else {
            Privacy::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }
        return back();
    }
}
