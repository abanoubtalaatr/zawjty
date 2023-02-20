@extends('dashboard.layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-2">
            @can('user-list')
                <div class="pull-left">
                    <h2> عرض المستخدم</h2>
                </div>
                <div class="pull-right my-5">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> الرجوع</a>
                </div>
            @endcan
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>الاسم :</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>البريد الاكتروني :</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>الادوار :</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success p-2">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
