@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-lg-4 col-lg-offset-4 text-center background-white">
        <h1 class="page-header">Thông tin User</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td class="text-left"><label>User Name:</label></td>
                    <td class="text-left">{{$user->name}}</td>
                </tr>
                <tr>
                    <td class="text-left"><label>Email:</label></td>
                    <td class="text-left">{{$user->email}}</td>
                </tr>
                <tr>
                    <td class="text-left"><label>Phone:</label></td>
                    <td class="text-left">{{$user->phone}}</td>
                </tr>
                <tr>
                    <td class="text-left"><label>User type:</label></td>
                    <td class="text-left">{{$user->user_type}}</td>
                </tr>
                <tr>
                    <td class="text-right" colspan="2">
                        <a href="{{ URL::to('admin/user/'.$user->id.'/edit') }}" role="button" class="btn btn-success btn-large margin-col" id="createUser">Edit</a>
                        {!! Form::open(['url' => 'admin/user/' . $user->id, 'class' => 'pull-right margin-col', 'onsubmit' => 'return ConfirmDelete()']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-warning')) !!}
                        {!!Form::close() !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection()
