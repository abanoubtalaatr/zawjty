@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">الملف الشخصي</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-1 person-id">
            <div class="col mb-4 mt-4">
                <div class="card person-card p-2">
                    <div class="w-100 btns-group-1">
                        @if(auth()->check())
                            @if(\App\Models\Block::where('blocking_person', auth()->user()->id)->where('banned_person', $user->id)->first())
                                <form class="d-inline" action="{{route('user.unblocked', $user->id)}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa-solid fa-unlock"></i>
                                    </button>
                                </form>
                            @else
                                <form class="d-inline" action="{{route('user.blocked_post', $user->id)}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button class="btn global-btn-2" type="submit">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </form>
                            @endif
                        @endif
                        <button class="btn global-btn-2">
                            <i class="fas fa-flag"></i>
                        </button>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-2">
                            <img src="https://picsum.photos/200/300?random={{$user->id}}" class="person-image"
                                 alt="...">
                            <div class="text-center"></div>
                        </div>
                        <div class="col-md-10 about-person">

                            <h5 class="card-title title-person-txt ">
                                <span> {{$user->name}}</span>
                            </h5>
                            <span class="d-block my-3"> 45عام </span>
                            <h5 class="card-title title-person-txt njnj">معلومات أكثر</h5>
                            <p class="card-text about-txt">{{$user->description}}</p>
                            <h5 class="card-title title-person-txt njnj">
                                اريد الشريك أن..
                            </h5>
                            {{Carbon\Carbon::setLocale('ar')}}
                            <p class="card-text about-txt">{{$user->description_partner}}</p>
                            <div class="row row-cols-1 row-cols-md-3 mr-1 mt-4 mb-2">
                                <p class="card-text title-person-info">سجل {{$user->created_at->diffForHumans()}}</p>
                                <p class="card-text title-person-info">{{$user->marriageType->name??''}}</p>
                                <p class="card-text title-person-info">{{$user->nationality->name??""}}</p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-1">
                                <div class="col-md-2 mb-1 text-right">
                                    <button class="btn global-btn-1">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <a href="javascript:void(0)" class="btn global-btn-1 like-user">
                                        <i class="fas fa-heart text-white" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="person-country">
                        <li>{{$user->country->name??''}}</li>
                        <li class="m-0">-</li>
                        {{--                        <li>الدمام</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4 text-right person-specification">
                <div class="brdr-2"></div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">المواصفات الشخصية</h5>
                        <div class="brdr"></div>
                        <ul class="row row-cols-2 row-cols-md-2 p-2">
                            <li>الطول / الوزن</li>
                            <li>{{$user->long->name??'' }} سم / {{$user->weight->name??''}} كغ</li>
                            <li>نوع الشعر</li>
                            <li>{{$user->hairType->name??''}}</li>
                            <li>لون الشعر</li>
                            <li>{{$user->hairColor->name??''}}</li>
                            <li>لون العيون</li>
                            <li>{{$user->colorEye->name??''}}</li>
                            <li>لون البشرة</li>
                            <li>{{$user->colorSkin->name??''}}</li>
                            <li>الحالة الصحية</li>
                            <li>{{$user->healthStatus->name??""}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4 text-right person-specification">
                <div class="brdr-2"></div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">الدين</h5>
                        <div class="brdr"></div>
                        <ul class="row row-cols-2 row-cols-md-2 p-2">
                            <li>التدين</li>
                            <li>{{$user->religiosity->name??""}}</li>
                            <li>الإلتزام بالصلاة</li>
                            <li>{{$user->commitmentPrayer->name??''}}</li>
                            <li>اللحية</li>
                            <li>{{$user->beard->name??""}}</li>
                            <li>التدخين</li>
                            <li>{{$user->smooking->name??""}}</li>
                            <li>الإستماع للأغاني</li>
                            <li>{{$user->music->name??''}}</li>
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col mb-4 text-right person-specification">
                <div class="brdr-2"></div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">الدراسة والعمل</h5>
                        <div class="brdr"></div>
                        <ul class="row row-cols-2 row-cols-md-2 p-2">
                            <li>المؤهل التعليمي</li>
                            <li>{{$user->education->name??''}}</li>
                            <li>العمل</li>
                            <li>{{$user->working->name??""}}</li>
                            <li>الحالة</li>
                            <li>{{$user->financialStatus->name??''}}</li>
                            <li>الدخل السنوي</li>
                            <li>{{$user->annualIncome->name??''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4 text-right person-specification">
                <div class="brdr-2"></div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">الحالة الإجتماعية</h5>
                        <div class="brdr"></div>
                        <ul class="row row-cols-2 row-cols-md-2 p-2">
                            <li>الحالة الإجتماعية</li>
                            <li>{{$user->maritalStatus->name??''}}</li>
                            <li>عدد الأولاد الحاليين</li>
                            <li>{{$user->number_of_children}}</li>
                            <li>رغبة في إنجاب أولاد؟</li>
                            <li>{{$user->havingChildren->name??""}}</li>
                        </ul>
                    </div>
                </div>
            </div>
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
                @foreach($similarUsers as $key=> $similarUser)
                    <div class="thumbnail">
                        <div class="col mb-4 text-center">
                            <a href="{{route('user.details', ['user'=> $similarUser->id])}}">
                                <div class="card px-4" style="border-radius: 5px">
                                    <div class="card-body">
                                        <div>
                                            <img src="https://picsum.photos/200/300?random={{$key}}" class="w-100"
                                                 alt="...">
                                        </div>
                                        <h5 class="card-title">{{$similarUser->name}}</h5>
                                        <p>{{$similarUser->age}} عام</p>
                                        <!-- <button class="btn btn-2 w-100">see</button> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <img id="slide-right" class="arrow" src="{{asset('imgs/left-arrow.png')}}">
        </div>
    </div>
@endsection
