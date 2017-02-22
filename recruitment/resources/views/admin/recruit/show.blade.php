@extends('admin.master')
@section('content')
<h1 class="page-header">Thông tin chi tiết</h1>
<div class="row">
    <div class="col-lg-12">
    <a href=" {!! URL::route('recruit.edit',$recruitment['id'])!!}" role="button" class="btn btn-success btn-large">Edit</a>
        <a href=" {!! URL::route('admin.recruit.destroy',$recruitment['id'])!!}" role="button" class="btn btn-success btn-large">Delete</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-10" style="padding-bottom:120px">
        <div class="form-group">
            <label>Title</label><br/>
            <p> {!!isset($recruitment)?$recruitment['title']:null!!}</p>
            <p>{!!'Tiêu đề'!!}</p>
        </div>
        <div class="form-group">
            <label>Image</label><br/>
            <img src=" {!!url('/storage/upload/images')!!}/{!!isset($recruitment)?$recruitment['image']:null!!}" class="detailImg">
        </div>
        <div class="form-group">
            <label>Position</label><br/>
            <p>{!!isset($recruitment)?$recruitment['position']:null!!}</p>
        </div>
        <div class="form-group">
            <label>Work address</label><br/>
            <p>{!!isset($recruitment)?$recruitment['address_work']:null!!}</p>
        </div>
        <div class="form-group">
            <label>Requirement</label><br/>
            <p>{!!isset($recruitment)?$recruitment['requirement']:null!!}</p>
        </div>
        <div class="form-group">
            <label>Belefit</label><br/>
            <p>{!!isset($recruitment)?$recruitment['belefit']:null!!}</p>
        </div>
        <div class="form-group">
            <label>Description</label><br/>
            <div>
                {!!isset($recruitment)?$recruitment['description']:null!!}
            </div>
        </div>
        <div class="form-group">
            <label>Deadline</label><br/>
            <p>{!!isset($recruitment)?date_format(date_create($recruitment['deadline']),'d-m-Y'):null!!}</p>
        </div>
    </div>
</div>
@endsection()
