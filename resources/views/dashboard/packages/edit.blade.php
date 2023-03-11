@extends('dashboard.layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb my-5">
            @can('package-list')
                <div class="pull-left">
                    <h2>تعديل الباقة</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-primary" href="{{ route('packages.index') }}"> الرجوع</a>
                </div>
            @endcan
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($package, ['method' => 'PATCH','route' => ['packages.update', $package->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>السعر :</strong>
                {!! Form::text('price', null, array('placeholder' => 'السعر','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>المدة بالأشهر :</strong>
                {!! Form::text('period', null, array('placeholder' => 'المدة','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مميزات الباقة :</strong>
                <br/>
                @foreach($features as $value)
                    <label>{{ Form::checkbox('features[]', $value->id, in_array($value->id, $packageFeatures) ? true : false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </div>
    {!! Form::close() !!}


@endsection
{{--<p class="text-center text-primary"><small>Abanoub Talaat</small></p>--}}
