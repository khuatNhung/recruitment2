<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentModel extends Model {
	protected $table = 'assessment';
	protected $fillable = [
		'cv_id', 'day_interview', 'deadline', 'point_test', 'conclude_end', 'result_end',
	];
	protected $timestamp = true;
}
