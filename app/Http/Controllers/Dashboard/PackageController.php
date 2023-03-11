<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\FeaturePackage;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:package-list|package-create|package-edit|package-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:package-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:package-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:package-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Package::get();

        return view('dashboard.packages.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::all();
        return view('dashboard.packages.create', compact('features'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required|integer',
            'features' => 'required',
            'period' => 'required'
        ]);

        $package = Package::create(Arr::except($request->all(), 'features'));

        foreach ($request->input('features') as $feature) {
            FeaturePackage::create([
                'feature_id' => $feature,
                'package_id' => $package->id,
            ]);
        }

        return redirect()->route('packages.index')
            ->with('success', 'تم الاضاقة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::find($id);
        return view('dashboard.users.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        $features = Feature::all();
        $packageFeatures = $package->features->pluck('feature_id')->toArray();

        return view('dashboard.packages.edit', compact('package', 'features', 'packageFeatures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'price' => 'required',
            'features' => 'required',
            'period' => 'required'
        ]);

        $input = $request->all();

        $package = Package::find($id);
        $package->update(Arr::except($request->all(),'features'));

         FeaturePackage::where('package_id', $package->id)->delete();

        foreach ($request->input('features') as $feature) {
            FeaturePackage::create([
                'feature_id' => $feature,
                'package_id' => $package->id,
            ]);
        }

        return redirect()->route('packages.index')
            ->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::find($id)->delete();
        return redirect()->route('packages.index')
            ->with('success', 'تم الحذف بنجاح');
    }
}
