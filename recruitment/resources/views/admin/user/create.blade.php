@extends('admin.master')
@section('content')
<!-- if there are creation errors, they will show here -->
{!! Form::open(array('url' => 'admin/user')) !!}
<div class="row">
    <div class="col-lg-4 col-lg-offset-4 background-white">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h1 class="page-header">Tạo User</h1>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('name') ? ' has-error' : '' !!} ">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong> {!! $errors->first('name') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1{!! $errors->has('email') ? ' has-error' : '' !!} ">
                    {!!Form::label('email', 'Email')!!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{!! $errors->first('email') !!} </strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1 {!!$errors->has('phone') ? ' has-error' : '' !!} ">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control'])!!}
                    @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong> {!! $errors->first('phone') !!} </strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('user_type') ? ' has-error' : '' !!} ">
                    {!! Form::label('user_type', 'User Type') !!}
                    {!! Form::select('user_type', $userTypes, old('user_type'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1 {!! $errors->has('password') ? ' has-error' : '' !!} ">
                    {!!Form::label('password', 'Password')!!}
                    {!! Form::password('password', ['class' => 'awesome form-control']) !!}
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong> {!! $errors->first('password')!!} </strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1{!! $errors->has('password_confirmation') ? ' has-error' : '' !!} ">
                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                    {!!Form::password('password_confirmation', ['class' => 'awesome form-control']) !!}                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1">
                    {!!Form::submit('Create User', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>
{!! Form::close()!!}
            <div class="row">
                <div class="form-group col-lg-10 col-lg-offset-1 text-right">
                    <a href=" {!! redirect()->getUrlGenerator()->previous() !!} " class="btn btn-success btn-large">Back</a>
                </div>
            </div>
    </div>
</div>
@endsection()
