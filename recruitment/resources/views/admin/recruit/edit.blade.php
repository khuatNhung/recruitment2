@extends('admin.master')
@section('content')
<h1 class="page-header">Sửa tin tuyển dụng</h1>
<div class="row">
    <div class="col-lg-10" style="padding-bottom:120px">
        <!-- /.col-lg-12 -->
        <form enctype="multipart/form-data" action="{!! route('recruit.update',$recruitment['id']) !!}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{ $recruitment['id'] }}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <label>Title</label>
            <div class="form-group{{ $errors->has('txtTieuDe') ? ' has-error' : '' }}">
                <input class="form-control" name="txtTieuDe" placeholder=""
                value="{!! old('txtTieuDe',isset($recruitment)?$recruitment['title']:null)!!}" />
                @if ($errors->has('txtTieuDe'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtTieuDe') }}</strong>
                </span>
                @endif
            </div>
            <label>Image</label>
            <div class="form-group">
                <input type='file' name="fImages" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"  value="{!! old('fImages',isset($recruitment)?$recruitment['image']:null)!!}" />
                <img src="{{url('/storage/upload/images')}}/{!! old('fImages',isset($recruitment)?$recruitment['image']:null)!!}" id="blah" name="blah" class="detailImg">
            </div>
            <label>Position</label>
            <div class="form-group">
                <input class="form-control" name="txtViTri" placeholder="" value="{!! old('txtViTri',isset($recruitment)?$recruitment['position']:null)!!}" />
            </div>
            <label>Work address</label>
            <div class="form-group{{ $errors->has('txtDiaChi') ? ' has-error' : '' }}">
                <input class="form-control" name="txtDiaChi" placeholder="" value="{!! old('txtDiaChi',isset($recruitment)?$recruitment['address_work']:null)!!}" />
                @if ($errors->has('txtDiaChi'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtDiaChi') }}</strong>
                </span>
                @endif
            </div>
            <label>Recruitment</label>
            <div class="form-group">
                <textarea class="form-control tinymce" rows="3" name='txtYeuCau'>{!! old('txtYeuCau',isset($recruitment)?$recruitment['recruitment']:null)!!}</textarea>
            </div>
            <label>Benefit</label>
            <div class="form-group">
                <textarea class="form-control tinymce" rows="3" name='txtQuyenLoi'> {!! old('txtQuyenLoi',isset($recruitment)?$recruitment['benefit']:null)!!}</textarea>
            </div>
            <label>Description</label>
            <div class="form-group{{ $errors->has('txtMota') ? ' has-error' : '' }}">
                <textarea class="form-control tinymce" name='txtMota' rows="3" >{!! old('txtMota',isset($recruitment)?$recruitment['description']:null)!!}</textarea>
            </div>
            <label>Deadline</label>
            <div class="form-group">
                <input type="date" class="form-control datepicker" name="txtHetHan" placeholder="" value="{!! old('txtHetHan',
                isset($recruitment)?date_format(date_create($recruitment['deadline']),'d-m-Y'):null)!!}"  />
            </div>
            <button type="submit" class="btn btn-success btn-large">Update</button>
        </form>
    </div>
</div>
@endsection()