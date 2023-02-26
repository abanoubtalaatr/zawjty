@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">حظر المستخدمين</h3>
            <div class="brdr-text"></div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="text-right mt-5 mb-5">
            <h5 class="card-title favuser-happys">قائمة المحظورين</h5>
            <p class="card-text">
                <q class="ndnd-q">
                    لائحة الاعضاء الذين قمت بإضافتهم لعدم الاهتمام والاشخاص المزعجين
                </q>
            </p>

            @if(isset($message))
                <div class="alert alert-success">{{$message}}</div>
            @endif

        </div>
        <div class="row row-cols-1 row-cols-md-4 overscroll-for-settings">
            <!--  -->
            @foreach($usersIBlockedThem as $user)
                <div class="col mb-4 mt-4 text-right">
                    <div class="card box-fav-card-user">
                        <div class="card-body">
                            <div class="box-fav-user">
                                <h5 class="card-title">{{$user->bannedPerson->name}}</h5>
                                <form action="{{route('user.unblocked', $user->bannedPerson->id)}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa-solid fa-unlock"></i>
                                    </button>
                                </form>

                            </div>
                            <a href="/user/{{$user->bannedPerson->id}}/details">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
        @endforeach
        <!--  -->
        </div>
    </div>
@endsection
