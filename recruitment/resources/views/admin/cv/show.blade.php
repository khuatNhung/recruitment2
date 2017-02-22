@extends('admin.master')
@section('content')
{{-- <section class="content"> --}}
	<div class="row">
		<!-- left column -->
		<div class="col-md-8 col-Xs-12">
			{{-- 	@foreach ($data as $data) --}}
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<div class="row">
						<div class="col-xs-6 icons">
							<button type="button" class="btn  btn-primary btn-flat">Back</button>
							<button type="button" class="btn  btn-success btn-flat">Print</button>
							<button type="button" class="btn  btn-danger btn-flat">Edit</button>
						</div>
						<div class="col-xs-3">
							<p>CV Information </p>
						</div>
						<div class="col-xs-3 Evalute">
							<button type="button" class="btn  btn-info btn-flat">Evalute</button>
						</div>
					</div>
				</div>
				<div class="box-header with-border">
					<div class="row">
						<div class="col-xs-6">
							<label for="exampleInputFile">Status :</label>
							<label for="">{{isset($data)?$data->status:null}}</label>
						</div>
						<div class="col-xs-6">
							<label for="exampleInputFile">DatePosed :</label>
							<label for="">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d.m.Y') }}</label>
						</div>
					</div>
				</div>
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Personal Detail</label>
							<div class="row">
								<div class="col-xs-4">
									<img class="profile-user-img img-responsive img-circle" src="{{isset($data)?$data->image:null}}" alt="User profile picture">
								</div>
								<div class="col-xs-8">
									<div class="row">
										<label for="exampleInputFile">Full Name:</label>
										<label for=""> {{isset($data)?$data->name:null}}</label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Day Of Birth:</label>
										<label for=""> {{isset($data)?$data->birthday:null}}</label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Email:</label>
										<label for="">{{isset($data)?$data->email:null}} </label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Phone Number:</label>
										<label for="">{{isset($data)?$data->phone:null}} </label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Address:</label>
										<label for="">{{isset($data)?$data ->address:null}}  </label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Present Address:</label>
										<label for="">{{isset($data)?$data->current_address:null}}</label>
									</div>
									<div class="row">
										<label for="exampleInputFile">Sex:</label>
										<label for="">{{isset($data)?$data->sex ? 'Nữ' : 'Nam':null}} </label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Objective</label>
							<div id="" style="margin-left: 10%">
								<label for="">{{isset($data)?$data->target:null}}</label>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Education</label>
							@foreach($itemSchool as $itemSchool)
							<div class="row" style="margin-left: 5%">
								<div class="col-xs-4">
									<label for="">{{isset($itemSchool)?$itemSchool->start_date:null}} -></label>
									<label for="">{{isset($itemSchool)?$itemSchool->end_date:null}}</label>
								</div>
								<div class="col-xs-8">
									<label for="">{{isset($itemSchool)?$itemSchool->school_name:null}}</label>
								</div>
							</div>
							@endforeach
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Certification</label>
							<div class="form-group" style="margin-left: 10%">
								@foreach($itemCertification as $itemCertification)
								<div class="row">
									<label for="">{{isset($itemCertification)?$itemCertification->cer_name:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Nam cap:</label>
									<label for="">{{isset($itemCertification)?$itemCertification->date_of_issue:null}} </label>
								</div>
								@endforeach
							</div>
						</div>
						<div class="form-group">
							<label for="">Skill</label>
							@foreach ($itemSkill as $itemSkill)
							<div class="row" style="margin-left: 5%">
								<div class="col-xs-4">
									<label for=""> {{isset ($itemSkill)?$itemSkill->skill_name:null}}</label>
								</div>
								<div class="col-xs-8">
									<label for=""> {{isset ($itemSkill)?$itemSkill->number_year:null}}</label>
								</div>
							</div>
							<div class="row" style="margin-left: 5%">
								<div class="col-xs-4">
									<label for=""> Decription</label>
								</div>
								<div class="col-xs-8">
									<label for=""> {{isset ($itemSkill)?$itemSkill->description:null}}</label>
								</div>
							</div>
							@endforeach
						</div>
						<div class="form-group ">
							<label for="exampleInputEmail1">Experience</label>
							<div class="col-md-10 col-xs-12 Experience " style="margin-left: 15%">
								@foreach($itemExperience as $itemExperience)
								<div class="row">
									<label for="exampleInputFile"> From {{isset ($itemExperience)?$itemExperience->start_date:null}}</label>
									<label for="">to  {{isset ($itemExperience)?$itemExperience->end_date:null}} </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Project Name:</label>
									<label for=""> {{isset ($itemExperience)?$itemExperience->project_name:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Company:</label>
									<label for=""> {{isset ($itemExperience)?$itemExperience->work_unit:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Team leader name/ Teacher:</label>
									<label for=""> {{isset ($itemExperience)?$itemExperience->leader_teacher:null}} </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">My responsibility:</label>
									<label for="">{{isset ($itemExperience)?$itemExperience->task:null}}  </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Quantity:</label>
									<label for="">{{isset ($itemExperience)?$itemExperience->size:null}} </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Decription:</label>
									<label for="">{{isset ($itemExperience)?$itemExperience->project_description:null}} </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Job position:</label>
									<label for="">{{isset ($itemExperience)?$itemExperience->position:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Technology:</label>
									<label for="">  {{isset ($itemExperience)?$itemExperience->technology:null}}</label>
								</div>
								<hr class="hr">
								@endforeach
							</div>
						</div>
						<div class="form-group ">
							<label for="exampleInputEmail1">Activities</label>
							@foreach($itemActivities as $itemActivities)
							<div class="col-md-10 col-xs-12 Activities" style="margin-left: 15%">
								<div class="row">
									<label for="exampleInputFile">From {{isset ($itemActivities)?$itemActivities->start_date:null}}</label>
									<label for=""> to {{isset ($itemActivities)?$itemActivities->end_date:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Activites Name:</label>
									<label for=""> {{isset ($itemActivities)?$itemActivities->activity_name:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Position:</label>
									<label for=""> {{isset ($itemActivities)?$itemActivities->position:null}}</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Description:</label>
									<label for=""> {{isset ($itemActivities)?$itemActivities->description:null}} </label>
								</div>
								<hr class="hr">
							</div>
							@endforeach
						</div>
						<div class="form-group ">
							<label for="exampleInputEmail1">Hobbies and interest</label>
							<div class="col-md-10 col-xs-12" style="margin-left: 15%">
								<div class="row">
									<label for="exampleInputFile">{{isset($data)?$data->hobbies:null}}</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">More Infomation</label>
							<div class="col-md-10 col-xs-12" style="margin-left: 15%">
								<div class="row">
									<label for="exampleInputFile">{{isset($data)?$data->other:null}}</label>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			{{-- @endforeach --}}
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Evaluate</h3>
				</div>
				<div class="box-header with-border">
					<div class="row">
						<div class="col-xs-12">
							<label for="exampleInputFile">Hạn phỏng vấn :</label>
							<label for="">25/01/2018</label>
						</div>
					</div>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Đánh giá sau phỏng vấn</label>
						<div class="col-xs-12" style="margin-left: 13%">
							<div class="row">
								<label for="exampleInputFile">Hạn cuối:</label>
								<label for=""> 02/01/2016 </label>
							</div>
							<div class="form-group" style="margin-top:4% ">
								<div class="row">
									<label for="exampleInputFile"> Nguoi Danh Gia:</label>
									<label for=""> Nguyen Van A</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Nội Dung :</label>
									<label for=""> Ngon</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Kết quả bài thi:</label>
									<label for=""> abcd... </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Kết quả phỏng vấn:</label>
									<label for=""> pass </label>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label for="exampleInputFile"> Nguoi Danh Gia:</label>
									<label for=""> Nguyen Van A</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Nội Dung :</label>
									<label for=""> Ngon</label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Kết quả bài thi:</label>
									<label for=""> abcd... </label>
								</div>
								<div class="row">
									<label for="exampleInputFile">Kết quả phỏng vấn:</label>
									<label for=""> pass </label>
								</div>
							</div>
							<div class="box-header with-border">
								<div class="row">
									<div class="col-xs-12">
										<div class="row " style="margin-left: -27%">
											<button type="button" class="btn  btn-primary btn-flat" style="">Email</button>
											<label for="exampleInputFile" style="margin-left: 5%">Tổng hợp đánh giá </label>
											<button type="button" class="btn  btn-primary btn-flat" style="margin-left: 11%">Edit</button>
											<button type="button" class="btn  btn-primary btn-flat" style="">Save</button>
										</div>
										<div class="row" style="margin-top: 6%">
											<label for="exampleInputFile">Nội Dung :</label>
											<label for=""> Ngon</label>
										</div>
										<div class="row">
											<label for="exampleInputFile">Kết quả bài thi:</label>
											<label for=""> abcd... </label>
										</div>
										<div class="row">
											<label for="exampleInputFile">Kết quả phỏng vấn:</label>
											<label for=""> pass </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<form role="form">
						<!-- text input -->
						<div class="form-group">
							<label>Đánh giá hàng tháng</label>
							<div class="row" style="margin-left: 5%">
								<label for=""> Giai đoạn 1:</label>
								<br>
								<label for=""> From 09/02/2015 to 02/05/2015</label>
							</div>
							<div class="row" style="margin-left: 5%">
								<button type="button" class="btn  btn-primary btn-flat" style="margin-left: 69%">Show</button>
								<br>
								<label for=""> Thang 1 nam 2016</label>
							</div>
							<label for="exampleInputFile"> Nguoi Danh Gia:</label>
							<label for=""> Nguyen Van A</label>
							<br>
							<label for="exampleInputFile">Nội Dung :</label>
							<label for=""> Ngon</label>
							<div class="form-group">
								<label for="exampleInputPassword1">Diem</label>
								<div class="row" style="margin-left: 5%">
									<div class="col-xs-8">
										<label for="">Hieu quả công việc</label>
									</div>
									<div class="col-xs-4">
										<label for=""> 4 </label>
									</div>
								</div>
								<div class="row" style="margin-left: 5%">
									<div class="col-xs-8">
										<label for=""> Điểm kỷ luật</label>
									</div>
									<div class="col-xs-4">
										<label for=""> 3</label>
									</div>
								</div>
								<div class="row" style="margin-left: 5%">
									<div class="col-xs-8">
										<label for=""> Điểm event</label>
									</div>
									<div class="col-xs-4">
										<label for=""> 1</label>
									</div>
								</div>
								<div class="row" style="margin-left: 5%">
									<div class="col-xs-8">
										<label for=""> Tong</label>
									</div>
									<div class="col-xs-4">
										<label for=""> 8</label>
									</div>
								</div>
							</div>
							<label for="exampleInputFile">Kết Luận :</label>
							<label for=""> Tốt</label>
							<div class="row" style="margin-left: 5%">
								<button type="button" class="btn  btn-primary btn-flat" style="margin-left: 69%">Xem Them</button>
								<br>
								<label for=""> Thang 2 nam 2016</label>
							</div>
							<div class="row" style="margin-left: 5%">
								<label for=""> Giai đoạn 2:</label>
								<br>
								<label for=""> From 09/02/2015 to 02/05/2015</label>
							</div>
						</div>
					</div>
					<!-- /.box -->
				</div>
			</div>
		</div>
		<!-- /.row -->
	{{-- </section> --}}
	@endsection