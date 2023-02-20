@extends('dashboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb my-2">
            <div class="pull-left">
                <h2>تعديل الملف الشخصي</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الاسم:</strong>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control"
                           placeholder="address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>البريد الاكتروني:</strong>
                    <input class="form-control" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>كلمة المرور الجديدة:</strong>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>تأكيد كلمة المرور:</strong>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </div>
    </form>
@endsection
