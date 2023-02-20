@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">انشاء حساب</h3>
            <div class="brdr-text"></div>
        </div>
    </div>

    <div class="container sigin-in-page mt-5 mb-5">
        <form class="mt-5 mb-5 row row-cols-1 row-cols-md-2 text-right mr-1" action="{{route('user.register')}}"
              method="post">
            @csrf
            @method('post')
            <div class="form-group form-g-sigin mb-4">
                <label for="exampleInputEmail1"> الاسم الاول</label>
                <input name="name" value="{{old('name')}}" type="text" class="form-control w-50" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
                @error('name')
                <div class="text-danger my-1">{{$message}}</div> @enderror

                <small id="emailHelp" class="form-text text-muted">لن نشارك الاسم الاول مع أي شخص آخر.</small>

            </div>


            <div class="form-group form-g-sigin mb-4">
                <label for="exampleInputEmail1">البريد الالكتروني</label>
                <input name="email" type="email" value="{{old('email')}}" class="form-control w-50"
                       id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                <div class="text-danger my-1">{{$message}}</div> @enderror

                <small id="emailHelp" class="form-text text-muted">لن نشارك بريدك الإلكتروني مع أي شخص آخر.</small>
            </div>

            <div class="form-group form-g-sigin mb-4">
                <label for="exampleInputEmail1"> تاريخ الميلاد</label>
                <input name="birth_day" type="date" class="form-control w-50" value="{{old('birth_day')}}"
                       id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('birth_day')
                <div class="text-danger my-1">{{$message}}</div> @enderror

                <small id="emailHelp" class="form-text text-muted">لن نشارك تاريخ الميلاد مع أي شخص آخر.</small>
            </div>


            <div class="form-group form-g-sigin mb-4">
                <label for="exampleInputEmail1"> الجنس </label>
                <select name="gender" value="{{old('gender')}}" class="form-control w-50"
                        id="exampleFormControlSelect1">
                    <option value="ذكر">ذكر</option>
                    <option value="انثي">انثي</option>
                </select>
                @error('gender')
                <div class="text-danger my-1">{{$message}}</div> @enderror

            </div>

            <div class="form-group form-g-sigin">
                <label for="exampleInputPassword1">انشاء كلمه سر</label>
                <input name="password" type="password" value="{{old('password')}}" class="form-control w-50"
                       id="exampleInputPassword1">
                @error('password')
                <div class="text-danger my-1">{{$message}}</div> @enderror

            </div>


            <div class="form-group form-g-sigin">
                <label for="exampleInputPassword1">بلد الاقامه</label>
                <select name="country_id" value="{{old('country_id')}}" class="form-control w-50"
                        id="exampleFormControlSelect1">
                        @foreach(\App\Models\Country::all() as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                @error('country_id')
                <div class="text-danger my-1">{{$message}}</div> @enderror


            </div>

            <div class="row row-cols-4 row-cols-md-2 text-right">
                <div class="col mb-4" style="margin-right: -20px">
                    <div class="card">
                        <div class="card-body box-sign-login-res">
                            <button href="" type="submit" class="btn global-btn-1 w-50">
                                ارسال
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 text-right">
                    <div class="card text-right" style="margin-right: -20px">
                        <div class="card-body box-sign-login-res">
                            <a href="/user/login" type="submit" class="btn global-btn-1 w-75">
                                هل لديك حساب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
@endsection
