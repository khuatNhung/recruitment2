<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvSkillModel extends Model {
	//
	protected $table = 'cv_skill';
	protected $fillable = [
		'id', 'skill_id', 'cv_id', 'number_year', 'description',
	];
	protected $timestamp = true;
	public function selectCvIdBySkillId($skill_id) {
		return self::select('cv_id', 'number_year')->where('skill_id', $skill_id)->get();
	}
}
