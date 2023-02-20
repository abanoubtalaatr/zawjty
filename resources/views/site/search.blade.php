@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">البحث</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <div class="text-right">
            <h4 class="card-title shshs pt-4">عن ماذا تبحث ؟</h4>
            <div class="brdr-text-footer-3"></div>
        </div>
        <div class="row row-cols-1 mt-5 row-cols-md-1 layout-search">
            <div class="col mb-4 text-center">
                <div class="card">
                    <div class="card-body row row-cols-1 row-cols-md-2">
                        <div class="male-box">
                            <div>
                                <img src="{{asset('imgs/male.svg')}}" alt="male">
                            </div>
                            <a href="/user/details/search?gender=man" class="btn global-btn-1 mt-4">
                                أنا أبحث عن ذكر
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                        <div class="female-box">
                            <div>
                                <img src="{{asset('imgs/female.svg')}}" alt="female">
                            </div>
                            <a href="/user/details/search?gender=women" class="btn global-btn-1 mt-4">
                                أنا أبحث عن أنثى
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
