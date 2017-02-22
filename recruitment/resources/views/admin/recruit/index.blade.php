@extends('admin.master')
@section('content')
<!-- Page Content -->
<h1 class="page-header">Tin tuyển dụng</h1>
<div class="row">
  <div class="col-lg-12">
    @if(Session::has('flash_message'))
    <div class="alert alert-success">
      <h4>{!! Session::get('flash_message') !!}</h4>
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-lg-10">
    <form action="{{URL::route('recruit.index')}}" enctype="multipart/form-data" method="GET" class="form-inline">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
      <label class="sr-only" for="txtFromDate">Từ ngày:</label>
      <input class="datepicker form-control" type="text" id="txtFromDate" name="txtFromDate" value="<?php echo isset($_GET['txtFromDate']) ? $_GET['txtFromDate'] : '' ?>" placeholder="From date"/>
      <label  class="sr-only"  for="txtToDate">Đến ngày:</label>
      <input class="datepicker form-control" id="txtToDate" type="text" name="txtToDate" value="<?php echo isset($_GET['txtToDate']) ? $_GET['txtToDate'] : '' ?>" placeholder="To date" />
      <button name="searchDate" id="searchDate1" class="btn btn-default">
      <span class="glyphicon glyphicon-search "></span>
      </button>
    </form>
  </div>
  <div class="col-lg-2">
    <center><a href="{{ URL::route('recruit.create')}}" role="button" class="btn btn-success btn-large" id="addRecruit">Thêm mới
    </a></center>
  </div>
</div>
<div class="row">
  @if(!$recruitments->isEmpty())
  <div class="col-lg-12">
    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
      <thead>
        <tr align="center">
          <th>No</th>
          <th>Title</th>
          <th>Position</th>
          <th>Requirement</th>
          <th>Date posted</th>
          <th>Deadline</th>
          <th width="60px"></th>
        </tr>
      </thead>
      <tbody>
        <?php $stt = 0;?>
        @foreach($recruitments as $item)
        <tr class="odd gradeX" align="center">
          <td>{!! ++$stt !!}</td>
          <td>{!! $item['title'] !!}</td>
          <td>{!! $item['position'] !!}</td>
          <td>{!! $item['requirement'] !!}</td>
          <td>{!! $item['created_at']->format('d-m-Y H:i:s') !!}</td>
          <td>{!! !empty($item['deadline'])?date_format(date_create($item['deadline']),'d-m-Y'):""!!}</td>
          <td>
            <a href="{{ URL::route('recruit.show',$item['id'])}}"><i class="fa fa-list fa-fw"></i></a>
            <a onclick="return confirmDelete('bạn có chắc muốn xóa không?')" href="{{ URL::route('admin.recruit.destroy',$item['id'])}}"><i class="fa fa-trash-o  fa-fw"></i></a>
            <a href="{{ URL::route('recruit.edit',$item['id'])}}">
              <i class="fa fa-pencil fa-fw"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{-- <center>{{$recruitments->appends(Request::except('page'))->links()}}</center> --}}
  @else
  <div class="col-lg-12">
    <div class="alert alert-info" id="info1" role="alert">
      <h3>Oh! Không có kết quả tìm kiếm nào.</h3>
    </div>
  </div>
  @endif
</div>
<!-- /.col-lg-12 -->
<!-- /#page-wrapper -->
@endsection()