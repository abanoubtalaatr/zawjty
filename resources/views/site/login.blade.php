@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">تسجيل الدخول</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container sigin-in-page mt-5 mb-5 text-end">
        @if (\Session::has('error'))
            <div class="alert alert-danger text-center mt-5 w-50">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        <form class="mt-5 mb-5 row row-cols-1 row-cols-md-1 text-right mr-1" action="{{route('user.login')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group form-g-sigin mb-4">
                <label for="exampleInputEmail1">البريد الالكتروني</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email') <div class="text-danger my-1">{{$message}}</div> @enderror

            </div>
            <div class="form-group form-g-sigin">
                <label for="exampleInputPassword1"> كلمه سر</label>
                <input type="password" name="password" class="form-control w-50" id="exampleInputPassword1">

                <div class="mt-2">
                    <a href="{{route('user.forgot_password')}}" >هل نسيت كلمه المرور ؟</a>
                </div>
                @error('password') <div class="text-danger my-1">{{$message}}</div> @enderror
            </div>

            <div class="row row-cols-2 row-cols-md-2 text-right">
                <div class="col mb-4" style="margin-right: -20px">
                    <div class="card">
                        <div class="card-body box-sign-login-res">
                            <button type="submit" class="btn global-btn-1 w-25">
                                دخول
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 text-right">
                    <div class="card text-right" style="margin-right: -20px">
                        <div class="card-body box-sign-login-res">
                            <a href="/user/register" type="submit" class="btn global-btn-1 w-25">
                                او انشاء حساب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="exampleModalfrgtpass" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="text-right">
                        <div class="form-group">
                            <label for="exampleInputEmail1">البريد الالكتروني</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </form>
                    <div class="mt-5">
                        <form class="form-create-new-pass">
                            <input type="tel" class="ifufrgtpass" maxlength="1">
                            <input type="tel" class="ifufrgtpass" maxlength="1">
                            <input type="tel" class="ifufrgtpass" maxlength="1">
                            <input type="tel" class="ifufrgtpass" maxlength="1">
                        </form>
                    </div>
                </div>
                <div class="text-right m-4">
                    <a href="" class="text-dark" style="text-decoration: underline">اعاده ارسال الكود</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn global-btn-1">ارسال</button>
                </div>
            </div>
        </div>
    </div>
@endsection
