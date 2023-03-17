<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Package;
use App\Models\Subscribe;
use App\Models\User;
use App\Services\MyFatoorahService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with('features')->get();

        return view('site.packages', compact('packages'));
    }

    public function subscribe(Request $request, Package $package)
    {
        $myFatora = new MyFatoorahService();
        $user = User::find(auth()->user()->id);
       return $myFatora->pay($request, $package, $user);
    }
}
