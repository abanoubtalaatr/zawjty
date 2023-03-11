@extends('dashboard.layouts.app')


@section('content')
    <div class="row" style="border-bottom: 2px solid;margin-bottom: 30px;">
        <div class="col-lg-12 margin-tb mt-5">

            <div class="pull-left">
                <h2>أدراة الباقات</h2>
            </div>
            <div class="pull-right">
                @can('package-create')
                    <a class="btn btn-success mb-2" href="{{ route('packages.create') }}"> أنشاء باقة جديدة</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>السعر</th>
            <th> المدة بالاشهر</th>
            <th width="280px">الاجراء</th>
        </tr>
        @foreach ($data as $key => $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->period }}</td>
                <td>
{{--                    <a class="btn btn-info" href="{{ route('packages.show',$item->id) }}">عرض</a>--}}
                    @can('package-edit')
                        <a class="btn btn-primary" href="{{ route('packages.edit',$item->id) }}">تعديل</a>
                    @endcan
                    @can('package-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['packages.destroy', $item->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('حذف', ['class' => 'btn btn-danger  mt-1']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>


{{--    {!! $roles->render() !!}--}}

    <script>
        $('.leading-5').addClass('my-4');
        $('.shadow-sm').hide();
    </script>
@endsection
