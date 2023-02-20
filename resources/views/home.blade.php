@extends('dashboard.layouts.app')

@section('content')
    {{--    {{dd('fdslfkjdskl')}}--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row my-3">
                    <div class="col-lg-4 col-lg-4  mb-2  col-md-6 col-sm-12 border text-center rounded bg-info py-2">
                        <a href="{{ route('contact_us.all') }}" class="text-dark">
                            <h5>رسائل التواصل</h5>
                        </a>
                    </div>

                    <div class="col-lg-4 col-lg-4  mb-2  col-md-6 col-sm-12 border text-center rounded bg-info py-2">
                        <a href="{{ route('users.index') }}" class="text-dark">
                            <h5>المستخدمين</h5>
                        </a>
                    </div>
                    <div class="col-lg-4 col-lg-4  mb-2  col-md-6 col-sm-12 border text-center rounded bg-info py-2">
                        <a href="{{ route('roles.index') }}" class="text-dark">
                            <h5>الصلاحيات والادوار</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
