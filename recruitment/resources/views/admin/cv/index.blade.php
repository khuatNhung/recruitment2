@extends('admin.master')
@section('content')
<!-- View list cv -->
<div class="view_list">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản lý CV</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('cv.create') }}">Create new CV</a>
        </div>
    </div>
    {{-- {!! Form::open(['url' => 'foo/bar']) !!} --}}
    <!--Tìm kiếm cv -->
    <form class="search-cv" method="GET" action="{{url('/admin/cv')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Date post</label>
                    </div>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" placeholder="From" class="form-control pull-right datepicker1" id="from" value="{{isset($_GET['date_from'])?$_GET['date_from']:null}}" name="date_from">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" placeholder="to" value="{{isset($_GET['date_to'])?$_GET['date_to']:null}}" class="form-control pull-right datepicker1" id="to" name="date_to">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Status</label>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-5 form-group">
                                <input type="radio" id="actived" name="status" value="actived" class="flat-red"
                                @if(isset($_GET['status']) && $_GET['status']=='actived')
                                checked
                                @endif()
                                ><label class="label-radio" for="actived">&nbsp;Actived</label>
                                {{-- {!!Form::radio('name', 'value',['id'=>'actived']);!!}
                                {{ Form::label('actived', 'actived') }} --}}
                            </div>
                            <div class="col-lg-7">
                                {{-- {!!Form::radio('name', 'value',['id'=>'notactived']);!!}
                                {{ Form::label('notactive', 'not actived') }} --}}
                                <input type="radio" id="notactivted" name="status" value="notactivted" class="flat-red"
                                @if(isset($_GET['status']) && $_GET['status']=='notactivted')
                                checked
                                @endif()
                                > <label class="label-radio" for="notactivted">&nbsp;Not actived</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <input type="radio" id="assses" name="status" value="assses" class="flat-red"
                                @if(isset($_GET['status']) && $_GET['status']=='assses')
                                checked
                                @endif()
                                ><label class="label-radio" for="assses">&nbsp;Assess</label>
                                {{-- {!!Form::radio('name1', 'value',['id'=>'danhgia']);!!}
                                {{ Form::label('danhgia', 'assess') }} --}}
                            </div>
                            <div class="col-lg-7">
                                <input type="radio" id="notassess" name="status" value="notassess" class="flat-red"
                                @if(isset($_GET['status']) && $_GET['status']=='notassess')
                                checked
                                @endif()
                                ><label class="label-radio" for="notassess">&nbsp;Not assess</label>
                                {{-- {!!Form::radio('name1', 'value',['id'=>'chuadanhgia']);!!}
                                {{ Form::label('chuadanhgia', 'not assess') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Result</label>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-5">
                                <input type="radio" id="pass" value="1" name="result" class="flat-red"
                                @if(isset($_GET['result']) && $_GET['result']=='1')
                                checked
                                @endif()
                                >
                                <label class="label-radio" for="pass">&nbsp;Pass</label>
                                {{-- {!!Form::radio('result', 'value',['id'=>'pass']);!!}
                                {{ Form::label('pass', 'pass') }} --}}
                            </div>
                            <div class="col-lg-7">
                                <input type="radio" value="0" id="fail" name="result" class="flat-red"
                                @if(isset($_GET['result']) && $_GET['result']=='0')
                                checked
                                @endif()
                                > <label class="label-radio" for="fail">&nbsp;Fail</label>
                                {{-- {!!Form::radio('result', 'value',['id'=>'fail']);!!}
                                {{ Form::label('fail', 'fail') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-search-second">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-2">
                        <label for="skill">Skill</label>
                        {{-- {!!Form::label('', 'Skill')!!} --}}
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <select class="form-control select2 select-search" id="skill" name="skill">
                                <option selected="selected" value="0">Choose skill</option>
                                @foreach($skills as $key => $item)
                                @if(isset($_GET['skill']) && $item->id==$_GET['skill'])
                                <option value="{{$item->id}}" selected>{{$item->skill_name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->skill_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        {{-- {!!Form::select('size', ['C' => 'C#', 'C+' => 'C+','P'=>'PHP'], null, ['placeholder' => 'Choose...']);!!} --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-5">
                        <label for="">Experience</label>
                        {{-- {!!Form::label('', 'Experience')!!} --}}
                    </div>
                    <div class="col-lg-7">
                        <select class="form-control select2 select-search" name="experience" id="experience">
                            <option value="0"
                                @if(isset($_GET['experience']) && $_GET['experience']=='0')
                                selected
                                @endif()
                            >Choose number</option>
                            <option value="nhohon1nam"
                                @if(isset($_GET['experience']) && $_GET['experience']=='nhohon1nam')
                                selected
                                @endif()
                            >&lt;1 năm</option>
                            <option value="1nam"
                                @if(isset($_GET['experience']) && $_GET['experience']=='1nam')
                                selected
                                @endif()
                            >1 năm</option>
                            <option value="3nam"
                                @if(isset($_GET['experience']) && $_GET['experience']=='3nam')
                                selected
                                @endif()
                            >3 năm</option>
                            <option value="lonhon5nam"
                                @if(isset($_GET['experience']) && $_GET['experience']=='lonhon5nam')
                                selected
                                @endif()
                            >&gt;5 năm</option>
                        </select>
                        {{-- {!!Form::select('size', ['1' => '1 năm', '2' => '2 năm','5+'=>'>5 năm'], null, ['placeholder' => 'Choose...']);!!} --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 form-group" >
                <div class="row">
                    <div class="col-lg-6"><button class="btn btn-default" type="submit"> Tìm kiếm</button></div>
                    <div class="col-lg-6">
                        @if($search)
                        <a class="btn btn-primary" href="{{ route('cv.index') }}">Show all</a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        {{-- {!! Form::close() !!} --}}
    </form>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table id="tablecv" class="table table-bordered table-striped display">
        <thead>
            <th class="no-sort">
                <input type="checkbox" name="chooseall" onClick="toggleSelect('listcv')" id="chooseall">
            </th>
            <th class="sort">STT</th>
            <th class="no-sort">Image</th>
            <th width="200px">Name</th>
            <th>Email</th>
            <th width="100px">Post date</th>
            <th>Status</th>
            <th class="no-sort"></th>
        </thead>
        <tbody>
            <?php
$i = 0;
$class = array('active', 'success', 'warning', 'danger', 'info');
$j = -1;
?>
            @foreach ($items as $key => $item)
            <?php
$created_at = date_create($item->created_at);
if ($i % 5 == 0) {
	$j = -1;
}
?>
            <tr class='{{$class[++$j]}}'>
                <td><input type="checkbox" name="select[]" id="check_{{$item->id}}"></td>
                <td>{{ ++$i }}</td>
                <td>
                    <img width="120" height="150" src="{{url('/storage/upload/images')}}/{{$item->image}}" alt="">
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td width="100px">{!! date_format($created_at,"d/m/Y") !!}</td>
                <td>
                    <?php
switch ($item->status) {
case 'actived':
	?>
                    Acitived
                    <?php
break;
case 'notactivted':
	?>
                    No activited
                    <?php
break;
case 'assess':
	?>
                    Assess
                    <?php
break;
default:
	?>
                    Not Assess
                    <?php
break;
}
?>
                </td>
                <td width="110px">
                    <a href="{{ route('cv.show',$item->id) }}" class="glyphicon glyphicon-eye-open" style="font-size:22px;"></a>
                    <a href="{{ route('cv.edit',$item->id) }}" class="glyphicon glyphicon-pencil icon" style="font-size:22px; color: green"></a>
                    <a href="" class="glyphicon glyphicon-list-alt icon" style="font-size:22px;color:red"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {!! $items->render() !!} --}}
    </div>
    {{-- @endsection --}}
@stop