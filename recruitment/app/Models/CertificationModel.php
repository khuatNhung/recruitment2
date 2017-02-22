<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationModel extends Model {
	protected $table = 'certification';
	protected $fillable = [
		'id', 'cv_id', 'cer_name', 'date_of_issue',
	];
	protected $timestamp = true;
}
