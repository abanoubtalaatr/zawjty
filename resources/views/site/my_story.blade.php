@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">شارك قصتك مع باقي الاعضاء</h3>
            <div class="brdr-text"></div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        @if(session()->has('message'))
            <h4 class="text-warning text-right">برجاء تسجيل الدخول اولا</h4>
        @endif
        <div class="row row-cols-1 mt-2 mb-5 row-cols-md-12 text-right">
            <form action="{{route('user.story.store')}}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="exampleFormControlTextarea3">أكتب قصتك</label>
                    <textarea required name="story" class="form-control" id="exampleFormControlTextarea3" rows="7"
                              placeholder="أكتب قصتك"></textarea>
                    <button type="submit" class="btn btn-primary mt-2">حفظ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
