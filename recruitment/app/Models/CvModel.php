<?php

namespace App\Models;
use App\Models\AssessmentModel;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class CvModel extends Model {

	protected $table = 'cv';
	protected $fillable = [
		'id', 'user_id', 'name', 'image', 'sex', 'birthday', 'email', 'phone', 'address', 'current_address', 'target', 'hobbies', 'other', 'status', 'created_at',
	];
	protected $timestamp = true;

	public function selectListCv() {
		return CvModel::select()->get();
	}
	public function index($request) {
		$result = $request->result;
		$user = AssessmentModel::where('result_end', $result)->get();
		// $date_from = $request->date_from;
		// $dateFromFormat = date_format(date_create($date_from), 'Y-m-d 00:00:00');
		$status = $request->status;
		$search = self::join('assessment', 'cv.id', '=', 'assessment.cv_id')
			->where('status', $status)
			->union($user)
			->get();

		return $search;
	}

	// public function selectCvByCvId($cv_id) {
	// 	return self::select()->where('id', $cv_id)->get();
	// }
	// public function selectCvByCreatedAt($dateFrom, $dateTo) {
	// 	$dateFromFormat = date_format(date_create($dateFrom), 'Y-m-d 00:00:00');
	// 	$dateToFormat = date_format(date_create($dateTo), 'Y-m-d 00:00:00');
	// 	return $cv = self::select()
	// 		->whereBetween('created_at', [$dateFromFormat, $dateToFormat])
	// 		->get();
	// }
	// public function selectCvByStatus($status) {
	// 	return self::select()->where('status', $status)->get();
	// }
}
