@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">المستخدمين المفضلين</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="text-right mt-5 mb-5">
            <h5 class="card-title favuser-happys">قائمة المفضلين</h5>
            <p class="card-text ndnd-q">
                <q class="ndnd-q">
                    لائحة الاعضاء الذين قمت بإضافتهم للإهتمام بهم ومتابعتهم
                </q>
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-4 overscroll-for-settings">

            @foreach($ILikesUsers as $user)

                <div class="col mb-4 mt-4 text-right">
                    <div class="card box-fav-card-user">
                        <div class="card-body">
                            <div class="box-fav-user">
                                <h5 class="card-title">{{$user->receiver->name}}</h5>
                                {{-- dislike this user --}}
                                <form action="{{route('user.dislike', $user->receiver->id)}}" method="post">
                                    @csrf
                                    @method('post')
                                    <button type="submit" class="btn global-btn-1 like-user">
                                        <i class="fas fa-heart-broken"></i>
                                    </button>
                                </form>

                            </div>
                            <a href="/user/{{$user->receiver->id}}/details">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="mainss">
        <div class="text-right mr-5 mt-4 mb-4">
            <h5 class="friends text-right">
                أعضاء مشابهين
                <div class="brdr-text-footer-5"></div>
            </h5>
        </div>
        <div class="slide-container">
            <img id="slide-left" class="arrow" src="{{asset('imgs/next.png')}}">
            <div class="container-fluid parent-box" id="slider">
                <div class="thumbnail">
                    <div class="col mb-4 text-center">
                        <a href="user.html">
                            <div class="card px-4" style="border-radius: 5px">
                                <div class="card-body">
                                    <div>
                                        <img src="imgs/person.jpg" class="w-100" alt="...">
                                    </div>
                                    <h5 class="card-title">رندا رودي</h5>
                                    <p>33 عام</p>
                                    <!-- <button class="btn btn-2 w-100">see</button> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <img id="slide-right" class="arrow" src="{{asset('imgs/left-arrow.png')}}">
        </div>
    </div>

@endsection
