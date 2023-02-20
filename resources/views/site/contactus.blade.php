@extends('layouts.app')
@section('content')
<div class="container-fluid section-intro-privecy">
    <div class="row row-cols-1 row-cols-md-1 row-privecy">
        <div class="col mb-4 text-right col-privecy">
            <img src="imgs/trulove.svg" class="text-right" alt="purelove">
        </div>
        <h3 class="card-title">تواصل معنا</h3>
        <div class="brdr-text"></div>
    </div>
</div>

@if (\Session::has('success'))
    <div class="alert alert-success text-center mt-5">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
{{--contacts us--}}
<div class="container mt-5 mb-5">
    <div class="text-right">
        <h4 class="card-title shshs pt-2">عن ماذا تبحث ؟</h4>
        <div class="brdr-text-footer-3"></div>
    </div>
    <div class="row row-cols-1 mt-5 row-cols-md-1 layout-search">
        <div class="col mb-4 text-center">
            <div class="card">
                <div class="card-body row row-cols-2 row-cols-md-2">
                    <div class="male-box help-box">
                        <div>
                            <a href="tel:123-456-7890">
                                <img src="imgs/call-us.svg" class="w-50" alt="male">
                            </a>
                        </div>
                    </div>
                    <div class="female-box help-box">
                        <div>
                            <a type="button" data-toggle="modal" data-target="#exampleModal">
                                <img src="imgs/mail-us.svg" class="w-25" alt="male">
                            </a>
                        </div>
                    </div>
                    <div class="text-hed-call-contact">
                        <h6 class="card-title shshs">اتصل بنا</h6>
                    </div>
                    <div class="text-hed-call-contact">
                        <h6 class="card-title shshs">ارسل رساله عبر البريد</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--pop up contact us--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <small id="emailHelp" class="form-text small-txt-popup">لن نشارك بريدك الإلكتروني مع أي شخص آخر</small>
            </div>

            <div class="modal-body text-right">
                <form class="contact-form" action="{{route('contact_us.store')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="exampleInputName">اسمك</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                    </div>
                    @error('name') <div class="text-danger">{{$message}}</div> @enderror

                    <div class="form-group">
                        <label for="exampleInputEmail1">بريدك الإلكتروني</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    @error('email') <div class="text-danger">{{$message}}</div> @enderror

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الرسالة</label>
                        <textarea name="message" class="form-control textarea-contact" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    @error('message') <div class="text-danger">{{$message}}</div> @enderror

                    <div class="modal-footer">
                        <button type="submit" class="btn global-btn-fa">ارسال</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
