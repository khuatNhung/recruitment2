@extends('admin.master')
@section('content')
<h1 class="page-header">Thêm tin tuyển dụng</h1>
<div class="row">
    <div class="col-lg-10" style="padding-bottom:120px">
        <form enctype="multipart/form-data" action="{!! route('recruit.store') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <label>Title</label>
            <div class="form-group{{ $errors->has('txtTieuDe') ? ' has-error' : '' }}">
                <input class="form-control" name="txtTieuDe" placeholder="" />
                @if ($errors->has('txtTieuDe'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtTieuDe') }}</strong>
                </span>
                @endif
            </div>
            <label>Image</label>
            <div class="form-group">

                <input type='file' name="fImages" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"/>
                <img id="blah" class="detailImg" src="#" alt="image" name="blah" />
            </div>
            <label>Position</label>
            <div class="form-group">
                <input class="form-control" name="txtViTri" placeholder="" />
            </div>
            <label>Work address</label>
            <div class="form-group{{ $errors->has('txtDiaChi') ? ' has-error' : '' }}">
                <input class="form-control" name="txtDiaChi" placeholder="" />
                @if ($errors->has('txtDiaChi'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtDiaChi') }}</strong>
                </span>
                @endif
            </div>
            <label>Requirement</label>
            <div class="form-group">
                <textarea class="form-control tinymce" rows="3" name='txtYeuCau'></textarea>
            </div>
            <label>Benefit</label>
            <div class="form-group">
                <textarea class="form-control tinymce" rows="3" name='txtQuyenLoi'></textarea>
            </div>
            <label>Description</label>
            <div class="form-group{{ $errors->has('txtMota') ? ' has-error' : '' }}">
                <textarea class="form-control tinymce" name='txtMota' rows="3"></textarea>
                @if ($errors->has('txtMota'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtMota') }}</strong>
                </span>
                @endif
            </div>
            <label>Deadline</label>
            <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                <input type="text" class="form-control datepicker" name="txtHetHan" placeholder="" />
                @if ($errors->has('deadline'))
                <span class="help-block">
                    <strong>{{ $errors->first('deadline') }}</strong>
                </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success btn-large">Thêm</button>
        </form>
    </div>
</div>
@endsection()