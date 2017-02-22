<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model {
	//
	protected $table = 'experience';
	protected $fillable = [
		'id', 'cv_id', 'start_date', 'end_date', 'work_unit', 'project_name', 'project_description', 'leader_teacher', 'position', 'task', 'size', 'technology',
	];
	protected $timestamp = true;
}
