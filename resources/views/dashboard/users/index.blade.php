@extends('dashboard.layouts.app')


@section('content')
    <div class="row"  style="border-bottom: 2px solid;margin-bottom: 30px;">
        <div class="col-lg-12 margin-tb">
            @can('user-create')
                <div class="pull-left mt-5">
                    <h2>ادارة المستخدمين</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> انشاء مستخدم جديد</a>
                </div>
            @endcan
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
            <th>الاسم</th>
            <th>البريد الاكتروني</th>
            <th>الادوار</th>
            <th width="350px">الاجراء</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">عرض</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">تعديل</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('حذف', ['class' => 'btn btn-danger  mt-1']) !!}
                    {!! Form::close() !!}
                    <a class="btn btn-info" href="{{ route('show_send_notification_to_user',$user->id) }}">أرسال اشعار</a>
                </td>
            </tr>
        @endforeach
    </table>


{{--    {!! $data->render() !!}--}}

<style>
    .font-medium{
        display: none;
    }
</style>
{{--    <p class="text-center text-primary"><small>Abanoub talaat</small></p>--}}
@endsection

