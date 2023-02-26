@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">قصص ناجحه من خلال الموقع</h3>
            <div class="brdr-text"></div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="text-right mr-3 mt-4">
            <h5 class="card-title title-article">قصص نجاح</h5>
            <p class="card-text ndnd-q">
                <q class="ndnd-q">نهنئ جميع المشتركين الذين وفقهم الله بإيجاد نصفهم الآخر
                </q>
            </p>
            <a href="{{route('user.story.show')}}" class="btn global-btn-1">اكتب قصتك الان </a>
        </div>
        <h5 class="text-right mt-5 mb-3">قصصي</h5>
        <div class="row row-cols-1 mb-2 row-cols-md-4">
            @if(isset($myStories))

                @if(count($myStories) > 0)

                    @foreach($myStories as $myStory)
                        <div class="col mb-4 text-right">
                            <div class="card border">
                                <div class="card-body">
                                    <span class="name-article">{{$myStory->user->name??''}}</span>
                                    <p class="card-text text-article scroll-text">
                                        {{$myStory->story}}
                                    </p>
                                    <span class="data-story-succ px-1">{{$myStory->published_at}} </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            @endif
        </div>
        <hr>
        <h5 class="text-right">قصص الاعضاء</h5>

        <div class="row row-cols-1 mt-3 mb-3 row-cols-md-4">
            @if(count($stories) > 0)
                @foreach($stories as $story)
                    <div class="col mb-4 text-right">
                        <div class="card border">
                            <div class="card-body">
                                <span class="name-article">{{$story->user->name??""}}</span>
                                <p class="card-text text-article scroll-text">
                                    {{$story->story}}
                                </p>
                                <span class="data-story-succ px-1">{{$story->published_at}} </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="container-fluid">
            <div class="row text-center warddddd row-cols-1 mt-5 mb-5 row-cols-md-3">
                <div class="col warda-145 mb-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('imgs/warda.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col warda-center mb-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title w-100">
                                بارَكَ اللَّهُ لَكُمَا وَبارَكَ عَلَيكُمَا وَجَمَعْ بَيْنَكُمَا
                                فِي خَيْرٍ
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col warda-145 mb-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('imgs/warda-left.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
