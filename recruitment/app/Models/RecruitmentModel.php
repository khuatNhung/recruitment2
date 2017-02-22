<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentModel extends Model {
	protected $table = 'recruitment';
	protected $fillable = ['id',
		'title', 'image', 'description', 'position', 'address_work', 'requirement', 'benefit', 'deadline', 'created_at',
	];
	public function index($rowOnPage) {
		if ($rowOnPage == "") {
			$recruitments = self::all();
		} else {
			$recruitments = self::paginate($rowOnPage);
		}
		return $recruitments;
	}
	public function show($id) {
		$recruitment = self::find($id);
		return $recruitment;
	}
	public function getImageById($id) {
		$recruitmentImage = self::select('image')->where('id', '=', $id)->first();
		return $recruitmentImage;
	}
	public static function destroy($id) {
		$deleteRecruitment = self::find($id)->delete();
		return $deleteRecruitment;
	}
	public function searchRecruitment($formDate, $toDate) {
		$formatFromDate = date_format(date_create($formDate), 'Y-m-d 00:00:00');
		$formatToDate = date_format(date_create($toDate), 'Y-m-d 23:59:59');
		$maxDate = self::select('created_at')->orderBy('created_at', 'desc')->first();
		$minDate = self::select('created_at')->orderBy('created_at')->first();
		$defaultMinDate = $minDate->created_at;
		$defaultMaxDate = $maxDate->created_at;
		if (!empty($formDate) && !empty($toDate)) {
			$recruitments = self::select()
				->whereBetween('created_at', [$formatFromDate < $formatToDate ? $formatFromDate : $formatToDate, $formatFromDate > $formatToDate ? $formatFromDate : $formatToDate])
				->get();
		} else {
			$recruitments = self::select()
				->whereBetween('created_at', [!empty($formDate) ? $formatFromDate : $defaultMinDate, !empty($toDate) ? $formatToDate : $defaultMaxDate])
				->get();
		}
		return $recruitments;
	}
}
