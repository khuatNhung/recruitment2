<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillModel extends Model {
	//
	protected $table = 'skill';
	protected $fillable = [
		'id', 'skill_name',
	];
	protected $timestamp = true;

	public function selectNameSkill() {
		return SkillModel::select('skill_name', 'id')->distinct()->get();
	}

	// public function selectNumberYearSkill(){
	// 	return Skill::select('number_year')->distinct()->get();
	// }
}
