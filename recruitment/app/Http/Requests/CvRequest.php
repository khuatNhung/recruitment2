<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest {
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
			'name' => 'required',
			'email' => 'required|email',
			'birthday' => 'required',
			'phone' => 'required',
			'address' => 'required',
			'image' => 'required',
		];
	}
	public function messages() {
		return [
			'required' => 'Vui lòng nhập :attribute',
			'image.required' => 'Bạn phải chọn ảnh đại diện!',
			'email.email' => 'Email chưa đúng định dạng',
		];
	}
}
