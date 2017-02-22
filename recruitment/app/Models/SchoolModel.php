<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolModel extends Model {
	//
	protected $table = 'school';
	protected $fillable = ['id',
		'cv_id', 'school_name', 'start_date', 'end_date',
	];
	protected $timestamp = true;
}
