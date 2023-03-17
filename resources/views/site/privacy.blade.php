@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">الشروط والاحكام</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container">
        <div class="text-right mr-3 mt-5">
            <h5 class="card-title title-article">{{$privacy->title}}</h5>
            <small class="card-text">أخر تحديث : {{\Carbon\Carbon::parse($privacy->updated_at)->format('Y-M-d')}}</small>
        </div>
        <div class="row row-cols-1 row-cols-md-1 policy-sjsj">
            <div class="col mb-4 text-right">
                <div class="card">
                    <div class="card-body">
                        {!! $privacy->description !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
