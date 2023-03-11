@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">ترقية الحساب</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-bg-up-to-icons row-cols-md-1">
            <div class="col mb-0">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('imgs/ubgrades.png')}}" class="card-img-top w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-4 upgrade-cards">
            @foreach($packages as $package)
                <div class="col mb-4 mt-4 text-center">
                    <div class="card text-white box-shadow-card1">
                        <div class="card-body">
                            <h5 class="card-title">{{$package->period}} شهر </h5>
                            <ul>
                                @foreach($package->features as $feature)
                                    <li>
                                        {{$feature->feature->name}}
                                    </li>
                                @endforeach
                            </ul>
                            <button class="btn global-btn-4 w-100">{{$package->price}} $</button>
                            <a href="{{route('user.subscribe', ['package' => $package->id])}}" class="btn global-btn-1 mt-4">
                                اشترك الان <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
