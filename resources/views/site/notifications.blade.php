@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">اشعاراتي</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="text-right mt-5 mb-5">
            <h5 class="card-title favuser-happys">اشعاراتي</h5>
            <p class="card-text">
                <q> كل الأشعارات </q>
            </p>
        </div>

        <section class="content my-5" style="direction: rtl">
            <!-- Content Start Here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">

                        </div>

                        <div class="box-footer clearfix">

                            <h2 class="text-right mb-4">الأشعارات الغير مقروءة</h2>
                            @forelse($unReadNotifications as $notification)
                                <div class="alert alert-danger border d-flex" role="alert"
                                     style="">
                                    <p><strong>"{{ $notification['data']->title }}"</strong> {{ $notification['data']->body }}</p>

                                    <a  href="{{route('user.notifications.mark_as_read', $notification->id)}}"
                                        class=" mark-as-read text-light-blue d-block mx-2"
                                        data-id="{{ $notification->id }}">
                                        اقراء الاشعار
                                    </a>

                                </div>

                                @if($loop->last)
                                    <a href="{{route('user.notifications.read_all')}}" id="mark-all">
                                        قراءت جميع الاشعارات
                                    </a>
                                @endif
                            @empty
                                <h6 class="text-right">لايوجود اشعارات جديدة</h6>
                            @endforelse
                            <hr>
                            <h2  class="text-right mb-4">أشعارات تم قرأتها مسبقا</h2>
                            @forelse($readNotifications as $notification)
                                <div class="alert alert-info border text-right" role="alert">
                                   <strong>"{{ $notification['data']->title}}"</strong> {{ $notification['data']->body}}
                                </div>

                            @empty
                                <h6 class="text-right">لايوجد أشعارات</h6>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End Here -->
        </section>
    </div>
@endsection
