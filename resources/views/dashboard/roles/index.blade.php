@extends('dashboard.layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>أدراة الادوار والصلاحيات</h2>
            </div>
            <div class="pull-right my-5">
                @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> أنشاء دور جديد</a>
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
            <th>No</th>
            <th>الاسم</th>
            <th width="280px">الاجراء</th>
        </tr>
        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">عرض</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">تعديل</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('حذف', ['class' => 'btn btn-danger  mt-1']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>


    {!! $roles->render() !!}

    <script>
        $('.leading-5').addClass('my-4');
        $('.shadow-sm').hide();
    </script>
@endsection
