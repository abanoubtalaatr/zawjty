@extends('dashboard.layouts.app')


@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>تعديل صفحة ساسية الخصوصية</h2>
            </div>
        </div>
    </div>


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


    <form action="{{ route('privacy.store',$privacy->id) }}" method="POST">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input class="form-control" name="title" placeholder="Title" value="{{$privacy->title}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" style="height:400px" name="description"
                              placeholder="Description">{{$privacy->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


    {{--    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>--}}
@endsection
