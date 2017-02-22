@extends('admin.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    @if(Session::has('flash_message'))
    <div class="alert-success">
      {!! Session::get('flash_message') !!}
    </div>
    @endif
  </div>
</div>
<form route="admin.user.list" enctype="multipart/form-data" method="GET" class="form-inline">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Quản lý User</h1>
        </div>

        <div class="col-lg-2">
            <select name="row_on_page" class="form-control">
                @foreach ($rowOnPage as $key => $val)
                <option {{($key == $params['row_on_page']) ? 'selected' : ''}} value={{$key}}>{{$val}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label for="name">UserName: </label>
            <input name="name" class="form-control" value="{{($params['name'] != null) ? $params['name'] : ''}}" placeholder="User Name">
        </div>
        <div class="form-group col-lg-3">
            <label for="email">Email: </label>
            <input name="email" class="form-control" value="{{($params['email'] != null) ? $params['email'] : ''}}" placeholder="mail@email.com">
        </div>
        <div class="form-group col-lg-3">
            <label for="phone">Phone: </label>
            <input name="phone" class="form-control" value="{{($params['phone'] != null) ? $params['phone'] : ''}}" placeholder="09787654321">
        </div>
        <div class="form-group col-lg-3">
            <label for="user_type">UserType: </label>
            <select name="user_type" class="form-control">
                <option {{($params['user_type'] == "") ? 'selected' : ''}} value="" >All</option>
                @foreach ($userTypes as $key => $val)
                <option {{($params['user_type'] == $key) ? 'selected' : ''}} value={{$key}} >{{$val}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class=" col-lg-12 col-lg-offset-11">
            <button name="searchUser" id="searchUser" class="btn btn-default">
                <span class="glyphicon glyphicon-search "></span>
            </button>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-lg-6">
        <a href="{{ URL::to('admin/user/create') }}" role="button" class="btn btn-success btn-large" id="createUser">Thêm mới</a>
    </div>
</div>
<div class="row" style="width:20px">
</div>
<div class="row">
    <div class="col-lg-12">
        @if (!$users->isEmpty())
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>UserType</th>
                    <th style="width: 90px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>
                        <a href="{{ URL::to('admin/user/' . $user->id) }}"><i class="fa fa-eye"></i></a>
                        <a href="{{ URL::to('admin/user/' . $user->id . '/edit') }}"><i class="fa fa-pencil fa-fw"></i></a>
                        {!! Form::open(['url' => 'admin/user/' . $user->id, 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::button('<i class="fa fa-trash-o fa-fw"></i>', ['type'=>'submit', 'class' => 'btn-warning']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>{!!$users->appends($params)->links()!!}</center>
        @else
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">
                <h3>Oh! Không có kết quả tìm kiếm nào.</h3>
            </div>
        </div>
        @endif
    </div>
</div>
@stop