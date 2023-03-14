@extends('dashboard.layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 584px;">


        <section class="content my-5">
            <!-- Content Start Here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">

                        </div>

                        <div class="box-footer clearfix">

                            <h2>الأشعارات الغير مقروءة</h2>
                            @forelse($unReadNotifications as $notification)
                                <div class="alert alert-danger border d-flex" role="alert"
                                     style="">
                                    <p>{{ $notification['data']->title }} {{ $notification['data']->body }}</p>

                                    <a  href="{{route('admin.notifications.mark_as_read', $notification->id)}}"
                                       class=" mark-as-read text-light-blue d-block mx-2"
                                       data-id="{{ $notification->id }}">
                                        اقراء الاشعار
                                    </a>

                                </div>

                                @if($loop->last)
                                    <a href="{{route('admin.notifications.read_all')}}" id="mark-all">
                                        قراءت جميع الاشعارات
                                    </a>
                                @endif
                            @empty
                                لايوجود اشعارات جديدة
                            @endforelse
                            <hr>
                            <h2 class="mt-3">أشعارات تم قرأتها مسبقا</h2>
                            @forelse($readNotifications as $notification)
                                <div class="alert alert-info border" role="alert">
                                    {{ $notification['data']->title . $notification['data']->body}}
                                </div>

                            @empty
                                لايوجد أشعارات
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End Here -->
        </section>

    </div>
@endsection
