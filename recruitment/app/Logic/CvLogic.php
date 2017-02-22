<?php

namespace App\Logic;

use App\Models\CvModel;
use DateTime;
use Illuminate\Support\Facades\DB;

class CvLogic {
	public function selectListCv() {
		$selectCv = new CvModel();
		return $selectCv->selectListCv();
	}
	public function store($request, $user_id) {
		$birthday = $request->birthday;
		$birthdayformat = date_format(new DateTime($birthday), "Y-m-d");
		$image = 'No avata';
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$image = $file->getClientOriginalName();
			$file->move('storage/upload/images', $image);
		}
		return CvModel::create([
			'user_id' => $user_id,
			'name' => $request->name,
			'image' => $image,
			'sex' => $request->sex,
			'birthday' => $birthdayformat,
			'email' => $request->email,
			'phone' => $request->phone,
			'address' => $request->address,
			'current_address' => $request->current_address,
			'target' => $request->target,
			'hobbies' => $request->hobbies,
			'other' => $request->other,
			'status' => 'notactivted',
		]);

	}
	public function storeAll($request, $user_id) {
		//insert table Cv
		$insertCv = new CvLogic();
		$insertCv = $insertCv->store($request, $user_id);
		$cv_id = $insertCv->id;
		//insert table school
		$insertSchool = new SchoolLogic();
		$insertSchool->store($request, $cv_id);

		//insert table certification
		$insertCertification = new CertificationLogic();
		$insertCertification->store($request, $cv_id);

		//insert table prize
		$insertPrize = new PrizeLogic();
		$insertPrize->store($request, $cv_id);

		//insert table skill and table skill cv
		$insertCvSkill = new CvSkillLogic();
		$insertCvSkill->store($request, $cv_id);

		//insert table experience
		$insertExperience = new ExperienceLogic();
		$insertExperience->store($request, $cv_id);

		//insert table activity
		$insertActivity = new ActivityLogic();
		$insertActivity->store($request, $cv_id);
	}

	public function search($dateFrom, $dateTo, $status, $result, $skill_id, $number_year) {
		$query = "select distinct cv.* from cv,skill,cv_skill,assessment ";

		if ($dateTo != null && $dateFrom != null) {
			$dateFromFormat = date_format(date_create($dateFrom), 'Y-m-d 00:00:00');
			$dateToFormat = date_format(date_create($dateTo), 'Y-m-d 23:59:59');
			$query .= " where (cv.created_at BETWEEN '$dateFromFormat' and '$dateToFormat')";

		}
		if ($dateTo == null && $dateFrom != null) {
			$dateFromFormat = date_format(date_create($dateFrom), 'Y-m-d 00:00:00');
			if (strpos($query, 'where')) {
				$query .= " and (cv.created_at>='$dateFromFormat')";
			} else {
				$query .= " where (cv.created_at>='$dateFromFormat')";
			}
		}
		if ($dateTo != null && $dateFrom == null) {
			$dateToFormat = date_format(date_create($dateTo), 'Y-m-d 23:59:59');
			if (strpos($query, 'where')) {
				$query .= " and (cv.created_at<='$dateToFormat')";
			} else {
				$query .= " where (cv.created_at<='$dateToFormat')";
			}
		}
		if ($status != null) {
			if (strpos($query, 'where')) {
				$query .= " and cv.status='$status'";
			} else {
				$query .= " where cv.status='$status'";
			}
		}
		if ($result != null) {
			if (strpos($query, 'where')) {
				$query .= " and cv.id=assessment.cv_id and assessment.result_end=$result";
			} else {
				$query .= " where cv.id=assessment.cv_id and assessment.result_end=$result";
			}
		}
		if ($skill_id != 0) {
			if (strpos($query, 'where')) {
				$query .= " and cv.id=cv_skill.cv_id and skill.id=cv_skill.skill_id and skill.id=$skill_id";
			} else {
				$query .= " where cv.id=cv_skill.cv_id and skill.id=cv_skill.skill_id and skill.id=$skill_id";
			}
		}
		if ($number_year != '0') {
			if (strpos($query, 'where')) {
				$query .= " and cv.id=cv_skill.cv_id and skill.id=cv_skill.skill_id and cv_skill.number_year='$number_year'";
			} else {
				$query .= " where cv.id=cv_skill.cv_id and skill.id=cv_skill.skill_id and cv_skill.number_year='$number_year'";
			}
		}
		return DB::select(
			DB::raw($query)
		);

	}
	public function index($request) {
		$search = new CvModel;
		return $search->index($request);
	}

}
