@extends('admin.master')
@section('content')

{!! Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) !!}
{!! Form::hidden('id', $user->id)!!}
<div class="row">
    <div class="col-lg-4 col-lg-offset-4 background-white">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1 class="page-header">Edit Thông tin User</h1>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1{!! $errors->has('name') ? ' has-error' : ''  !!} ">
{!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong> {!! $errors->first('name')!!} </strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('email') ? ' has-error' : '' !!} ">
                {!!Form::label('email', 'Email') !!}
                {!!Form::text('email', null, array('class' => 'form-control')) !!}
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{!! $errors->first('email') !!} </strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('phone') ? ' has-error' : ''  !!} ">
{!! Form::label('phone', 'Phone') !!}
                {!! Form::text('phone', null, array('class' => 'form-control')) !!}
                @if ($errors->has('phone'))
                <span class="help-block">
                    <strong> {!! $errors->first('phone') !!} </strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('user_type') ? ' has-error' : ''  !!} ">
                {!! Form::label('user_type', 'User Type') !!}
                {!!Form::select('user_type', $userTypes, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('password') ? ' has-error' : ''  !!} ">
                {!!Form::label('password', 'Password') !!}                {!! Form::password('password', ['class' => 'awesome form-control']) !!}
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong> {!! $errors->first('password')  !!} </strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('password_confirmation') ? ' has-error' : ''  !!} ">
                {!! Form::label('password_confirmation', 'Confirm Password')!!}
                {!! Form::password('password_confirmation', ['class' => 'awesome form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-10 col-lg-offset-1 text-right">
                {!! Form::submit('Update!', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection()
