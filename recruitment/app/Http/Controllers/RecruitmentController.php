<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruitmentRequest;
use App\Logic\RecruitmentLogic;
use Illuminate\Http\Request;

class RecruitmentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		if (isset($request['txtFromDate'])) {
			$formDate = $request->txtFromDate;
			$toDate = $request->txtToDate;
			$recruitmentLogic = new RecruitmentLogic();
			$recruitments = $recruitmentLogic->searchRecruitment($formDate, $toDate);

		} else {
			$recruitmentLogic = new RecruitmentLogic;
			$recruitments = $recruitmentLogic->index();
		}
		return view('admin.recruit.index', compact('recruitments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.recruit.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(RecruitmentRequest $request) {
		$recruitmentLogic = new RecruitmentLogic();
		$recruitmentLogic->store($request);
		return redirect()->route('recruit.index')->with(['flash_message' => 'Thêm thành công']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$recruitmentLogic = new RecruitmentLogic;
		$recruitment = $recruitmentLogic->show($id);
		return view('admin.recruit.show', compact('recruitment', 'id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$recruitmentLogic = new RecruitmentLogic();
		$recruitment = $recruitmentLogic->show($id);
		return view('admin.recruit.edit', compact('recruitment', 'id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(RecruitmentRequest $request, $id) {
		$recruitmentLogic = new RecruitmentLogic();
		$recruitmentLogic->update($request, $id);
		return redirect()->route('recruit.index')->with(['flash_message' => 'Sửa thành công']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$recruitmentLogic = new RecruitmentLogic();
		$recruitmentLogic->destroy($id);
		return redirect()->route('recruit.index')->with(['flash_message' => 'Xóa thành công']);
	}
}
