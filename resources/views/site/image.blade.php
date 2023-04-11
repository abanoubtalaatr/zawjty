@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">الصورة الشخصية</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 search-for-man text-right">
        <div class="text-right">
            <h5 class="card-title">الصورة الشخصية
                <div class="brdr-text-footer-4"></div>
            </h5>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block w-25">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            <img class="rounded" src="{{asset('\\')}}{{ Session::get('avatar') }}" width="300" height="300">
        @endif
        @if(!Session::get('success'))
            @if(auth()->check()&& !is_null(auth()->user()->avatar))
                <img class="rounded" src="{{asset('\\users\\')}}{{ auth()->user()->avatar }}" width="300" height="300">
            @endif
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('user.save_image')}}" method="post"
              enctype="multipart/form-data">
            <div class="row row-cols-2 row-cols-md-2 mt-5 p-3" style="">
                @csrf
                @method('post')
                <div class="row"><br>
                    <div class="col-md-6">
                        <input type="file" name="avatar" id="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-2">
                        <img id="preview-image-before-upload" class="my-2"
                             style="max-height: 250px;">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">رفع</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function (e) {


            $('#image').change(function(){

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

    </script>
@endsection
