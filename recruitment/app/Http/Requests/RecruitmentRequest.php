<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'txtTieuDe' => 'required',
			'txtMota' => 'required',
			'txtDiaChi' => 'required',

		];
	}
	public function messages() {
		return [
			'txtTieuDe.required' => 'Please choose title',
			'txtMota.required' => 'Please choose description',
			'txtDiaChi.required' => 'Please choose work address',
		];
	}
}
