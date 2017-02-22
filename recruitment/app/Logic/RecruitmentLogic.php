<?php
namespace App\Logic;
use App\Models\RecruitmentModel;

/**
 *
 */
class RecruitmentLogic {

	public function index($rowOnPage = "") {
		$recruitmentModel = new RecruitmentModel;
		$recruitments = $recruitmentModel->index($rowOnPage);
		return $recruitments;
	}
	public function show($id) {
		$recruitmentModel = new RecruitmentModel;
		$recruitment = $recruitmentModel->show($id);
		return $recruitment;
	}
	public function getImageById($id) {
		$recruitmentModel = new RecruitmentModel;
		$recruitmentImage = $recruitmentModel->getImageById($id);
		return $recruitmentImage;
	}
	public function store($params) {
		$recruitment = new RecruitmentModel();
		if ($recruitment != null) {
			$recruitment->title = $params['txtTieuDe'];
			$img = $params->file('fImages');
			if ($img != "") {
				$img_name = $params['fImages']->getClientOriginalName();
				$des = 'storage/upload/images';
				$img->move($des, $img_name);
			} else {
				$img_name = "";
			}
			$recruitment->image = $img_name;
			$recruitment->position = $params['txtViTri'];
			$recruitment->address_work = $params['txtDiaChi'];
			$recruitment->requirement = $params['txtYeuCau'];
			$recruitment->benefit = $params['txtQuyenLoi'];
			$recruitment->description = $params['txtMota'];
			$params['deadline'] = date_format(date_create($params->txtHetHan), 'Y-m-d');
			$recruitment->deadline = (!empty($params->txtHetHan) ? $params['deadline'] : null);
			$recruitment->save();
		}
	}
	public function update($params, $id) {
		$recruitmentModel = new RecruitmentModel;
		$recruitment = $recruitmentModel->show($id);
		if ($recruitment != null) {
			$recruitment->title = $params['txtTieuDe'];
			$img = $params->file('fImages');
			if ($img != "") {
				$img_name = $params['fImages']->getClientOriginalName();
				$des = 'storage/upload/images';
				$img->move($des, $img_name);
			} else {
				$image = $recruitmentModel->getImageById($id);
				$img_name = $image->image;
			}
			$recruitment->image = $img_name;
			$recruitment->position = $params['txtViTri'];
			$recruitment->address_work = $params['txtDiaChi'];
			$recruitment->requirement = $params['txtYeuCau'];
			$recruitment->benefit = $params['txtQuyenLoi'];
			$recruitment->description = $params['txtMota'];
			$params['deadline'] = date_format(date_create($params->txtHetHan), 'Y-m-d');
			$recruitment->deadline = (!empty($params->txtHetHan) ? $params['deadline'] : null);
			$recruitment->save();
		}
	}
	public function destroy($id) {
		$recruitmentModel = new RecruitmentModel;
		$recruitmentModel->destroy($id);
	}
	public function searchRecruitment($formDate, $toDate) {
		$recruitmentModel = new RecruitmentModel;
		$searchRecruitment = $recruitmentModel->searchRecruitment($formDate, $toDate);
		return $searchRecruitment;
	}
}
?>