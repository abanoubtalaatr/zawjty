@extends('dashboard.layouts.app')


@section('content')
    <div class="row mt-5"  style="border-bottom: 2px solid;margin-bottom: 30px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>رسائل التواصل</h2>
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
            <th>الرسالة</th>
            <th>هل تم الرد</th>
            <th width="280px">الاجراء</th>
        </tr>
        @foreach ($contacts  as  $contact)
            <tr>
                <td>{{ $loop->index }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{$contact->is_replied==1 ?'نعم':'لم يتم الرد بعد'}}</td>
                <td>
                    <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                        <a class="btn btn-info"
                           @if($contact->is_replied==0)@endif href="{{ route('contacts.replay',$contact->id) }}">رد</a>
                        {{--                        @can('contact-edit')--}}
                        {{--                            <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>--}}
                        {{--                        @endcan--}}


                        @csrf
                        @method('POST')
                        @can('contact-delete')
                            <button type="submit" class="btn btn-danger mt-1">حذف</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $contacts->links() !!}


{{--    <p class="text-center text-primary"><small>abanoubtalaat555@gmail.com</small></p>--}}
@endsection
