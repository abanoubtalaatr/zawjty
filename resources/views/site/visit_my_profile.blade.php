@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">مستخدمون قاموا بزيارة حسابي</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="text-right mt-5 mb-5">
            <h5 class="card-title favuser-happys">قائمة من قاموا بزيارتي</h5>
            <p class="card-text">
                <q> لائحة الاعضاء الذين قاموا بزيارتي </q>
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-4 overscroll-for-settings">
            @foreach($visitors as $visitor)
                <div class="col mb-4 mt-4 text-right">
                    <div class="card box-fav-card-user">
                        <div class="card-body">
                            <div class="box-fav-user">
                                <h5 class="card-title">{{$visitor->visitor->name}}</h5>
                            </div>
                            <a href="/user/{{$visitor->visitor->id}}/details">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
