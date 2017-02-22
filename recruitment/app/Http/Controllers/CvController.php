<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CvRequest;
use App\Logic\CvActivitiesLogic;
use App\Logic\CvCertificationLogic;
use App\Logic\CvEducationLogic;
use App\Logic\CvExperienceLogic;
use App\Logic\CvLogic;
use App\Logic\CvSkillLogic;
use App\Logic\SkillLogic;
use App\Models\CvModel;
use Auth;
use Illuminate\Http\Request;

class CvController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$items = new CvLogic();
		if (isset($request->date_from)) {
			$date_from = $request->date_from;
			$date_to = $request->date_to;
			$skill_id = $request->skill;
			$number_year = $request->experience;
			$status = $request->status;
			$result = $request->result;
			if (empty($date_from) && empty($date_to) && $skill_id == 0 && $number_year == '0' && empty($status) && empty($result)) {
				$items = $items->selectListCv();
			} else {
				$items = $items->search($date_from, $date_to, $status, $result, $skill_id, $number_year);
				// $items = $items->index($request);
				// echo "<pre>";
				// print_r($items);
				// die();
				// $items = $items->search2($request);
			}
			$search = true;
		} else {
			$items = $items->selectListCv();
		}
		$skills = new SkillLogic();
		$skills = $skills->selectNameSkill();
		$search = false;
		return view('admin.cv.index', compact('items', 'skills', 'search'));
		// ->with('i', ($request->input('page', 1) - 1) * 5);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$skills = new SkillLogic();
		$skills = $skills->selectNameSkill();
		return view('admin.cv.create', compact('skills'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

	public function store(CvRequest $request) {
		$user_id = Auth::id();
		//insert table cv
		$insertCv = new CvLogic();
		$insertCv = $insertCv->storeAll($request, $user_id);

		return redirect()->route('cv.index')
			->with('success', 'Bạn đã thêm mới thành công CV');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//

		// $id=1;
		$data = CvModel::find($id);

		$objSkillCv = new CvSkillLogic();
		$itemSkill = $objSkillCv->skillCv($id);

		$objSchoolCv = new CvEducationLogic();
		$itemSchool = $objSchoolCv->cvEducationLogic($id);

		$objCertificationCv = new CvCertificationLogic();
		$itemCertification = $objCertificationCv->cvCertificationLogic($id);

		$objExperienceCv = new CvExperienceLogic();
		$itemExperience = $objExperienceCv->cvExperienceLogic($id);

		$objActivitiesCv = new CvActivitiesLogic();
		$itemActivities = $objActivitiesCv->cvActivitiesLogic($id);
		// var_dump($data);
		// var_dump($itemSkill);
		// var_dump($itemSchool);
		// die;
		return view('admin.cv.show', compact('data', 'itemSkill', 'itemSchool', 'itemCertification', 'itemExperience', 'itemActivities'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		// $del = new CvLogic();
		// $del->deleteCv($id);
		// return redirect()->route('cv.index')
		// 	->with('success', 'Chúc mừng bạn, bạn đã xóa thành công!');
	}
}
//