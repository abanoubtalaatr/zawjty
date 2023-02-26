@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">{{request()->title}}</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 mb-4">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-2 new-online-mwda">
                <div class="col mb-4 mt-4">
                    <div class="card text-right">
                        <div class="card-body">
                            <h5 class="card-title">نتيجة البحث</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach($users as $index=> $user)
                <div class="col mb-4 mt-5">
                    <div class="card card-person">
                        <div class="img-2">
                            <div class="bg-dark"></div>
                            <img src="https://picsum.photos/200/300?random={{$index}}" alt="person">
                        </div>
                        <details open="" class="text-right">
                            <summary>نبذه عنه</summary>
                            <a href="{{route('user.details', ['user' => $user->id])}}" class="btn global-btn-1 w-100 mt-2 mb-2 text-center">شاهد الصفحه</a>
                            <p>
                                <span class="details-sp"> الاسم : </span> {{$user->name}}
                            </p>
                            <p>
                                <span
                                    class="details-sp"> الدوله : </span>@if($user->country) {{$user->country->name}}@endif
                            </p>
                            <p>
                                <span class="details-sp"> العمر : </span>
                                {{$user->age}} عام
                            </p>
                        </details>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
