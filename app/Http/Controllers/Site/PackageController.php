<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Package;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with('features')->get();

        return view('site.packages', compact('packages'));
    }

    public function subscribe(Package $package)
    {
        $subscribe = Subscribe::create([
            'package_id' => $package->id,
            'user_id' => auth()->user()->id,
            'expire_at' => Carbon::now()->addMonths($package->period),
        ]);

    }
}
