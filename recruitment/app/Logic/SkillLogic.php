<?php

namespace App\Logic;
use App\Models\SkillModel;

class SkillLogic {
	public function selectNameSkill() {
		$select = new SkillModel;
		return $select->selectNameSkill();
	}
	public function store($skill_name) {
		return SkillModel::create([
			'skill_name' => $skill_name,
		]);
	}

}