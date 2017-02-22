<?php

use Illuminate\Database\Seeder;

class RecruitmentTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('recruitment')->delete();
		$date = date('Y/m/d h:i');
		DB::table('recruitment')->insert([
			'title' => 'Zinza technology tuyển thực tập sinh Designer',
			'image' => 'images/tuyendung1.jpg',
			'description' => 'abcjsjjj',
			'position' => 'intern',
			'address_work' => 'ngõ 92 trần thái tông',
			'requirement' => 'là sinh viên năm cuối đh giao thông vận tải',
			'benefit' => 'Được hướng dẫn, đào tạo.
                        Có cơ hội được thực hành và trải nghiệm trong các dự án thực tế của công ty.
                        Có cơ hội được  trực tiếp CEO ECOM VIET NAM – Mr Đặng Quốc Hùng đào tạo –Tranning
                        Trong quá trình thực tập nếu bạn có năng lực tốt sẽ được xem xét để trở thành nhân viên chính thức ( hoặc cộng tác viên) của công ty.',
			'deadline' => '2016-1-1',
			'created_at' => $date,
			'updated_at' => $date,
		]);
		DB::table('recruitment')->insert([
			'title' => 'Tuyển nhân viên thiết kế đồ họa',
			'image' => 'images/tuyendung1.jpg',
			'description' => 'Thiết kế logo , hình ảnh trang trí theo phong cách có sẵn hoặc    mới. ( in trên Áo thun, Cốc, Mũ, Poster…)
                     Thực hiện các thiết kế khác theo yêu cầu công việc.',
			'position' => 'intern',
			'address_work' => 'ngõ 92 trần thái tông',
			'requirement' => 'Không yêu cầu bằng cấp.
                             Thành thạo PTS, AI ( vẽ tay, vẽ digital là lợi thế )
                             Trung thực, đúng hạn, chăm chỉ, chịu khó tiếp thu học hỏi.
                             Đam mê với lĩnh vực thiết kế, tư duy thẩm mỹ tốt.',
			'benefit' => 'Được hướng dẫn, đào tạo.
                        Có cơ hội được thực hành và trải nghiệm trong các dự án thực tế của công ty.
                        Có cơ hội được  trực tiếp CEO ECOM VIET NAM – Mr Đặng Quốc Hùng đào tạo –Tranning
                        Trong quá trình thực tập nếu bạn có năng lực tốt sẽ được xem xét để trở thành nhân viên chính thức ( hoặc cộng tác viên) của công ty.',

			'deadline' => '2016-1-1',
			'created_at' => $date,
			'updated_at' => $date,
		]);
		DB::table('recruitment')->insert([
			'title' => 'Tuyển developer lập trình web',
			'image' => 'images/tuyendung1.jpg',
			'description' => 'hahsjajk',
			'position' => 'dev',
			'address_work' => 'hà nội',
			'requirement' => 'lập trình viên có kinh nghiệm 2 năm',
			'benefit' => 'được làm việc trong môi trường năng động...',
			'deadline' => '2016-1-1',
			'created_at' => $date,
			'updated_at' => $date,
		]);
		DB::table('recruitment')->insert([
			'title' => 'Tuyển developer android',
			'image' => 'images/tuyendung1.jpg',
			'description' => 'hahsjajk',
			'position' => 'dev',
			'address_work' => 'hà nội',
			'requirement' => 'lập trình viên có kinh nghiệm 2 năm',
			'benefit' => 'được làm việc trong môi trường năng động...',
			'deadline' => '2016-1-1',
			'created_at' => $date,
			'updated_at' => $date,
		]);
		DB::table('recruitment')->insert([
			'title' => 'Tuyển developer Object C',
			'image' => 'images/tuyendung1.jpg',
			'description' => 'hahsjajk',
			'position' => 'dev',
			'address_work' => 'hà nội',
			'requirement' => 'lập trình viên có kinh nghiệm 2 năm',
			'benefit' => 'được làm việc trong môi trường năng động...',
			'deadline' => '2016-1-1',
			'created_at' => $date,
			'updated_at' => $date,
		]);
	}
}
