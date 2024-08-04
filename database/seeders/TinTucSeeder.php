<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('tin_tuc_asms')->insert([
                [
                    'theloai_id' => rand(1, 6),
                    'ten' => 'Đường truyền Internet 10 Gbps được triển khai tại Việt Nam',
                    'noidung' => 'VNPT triển khai đường truyền Internet công nghệ mới với tốc độ tối đa 10 Gbps, nhưng chưa phải tốc độ đến người dùng cuối.
                                    Trong thông báo ngày 18/7, nhà mạng này cho biết đã tiên phong triển khai các trạm sử dụng công nghệ XGSPON tại gần 60 tỉnh thành. XGSPON (XGigabit-capable Passive Optical Network) là tiêu chuẩn truyền dẫn quang học được phát triển dựa trên nền tảng của công nghệ PON, cho phép nâng tốc độ truyền dẫn dữ liệu tối đa 10 Gbps cho cả tải lên và tải xuống trên một đường cáp quang.
                                    Công nghệ này giúp giải quyết bài toán chênh lệch giữa hai đường tải, vốn là hạn chế của công nghệ cũ đang được sử dụng phổ biến tại Việt Nam. Ví dụ, công nghệ GPON trước đây cho tốc độ tải lên - tải xuống là 1,25 - 2,5 Gbps, hay XGPON cho tải xuống 10 Gbps, nhưng tải lên chỉ dừng lại ở 2,5 Gpbs.
                                    Theo VNPT, việc cân bằng giữa hai đường tải sẽ phù hợp với xu thế và nhu cầu của người dùng Internet, khi các ứng dụng như trò chơi trực tuyến, livestream, IoT, họp online, điện toán đám mây đòi hỏi đường tải lên tốc độ cao.',
                    'mota' => 'VNPT triển khai đường truyền Internet công nghệ mới với tốc độ tối đa 10 Gbps, nhưng chưa phải tốc độ đến người dùng cuối.',
                    'hinhanh' => 'post-landscape-' . rand(1, 6) . '.jpg',
                    'luotxem' => rand(50, 999),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]);
        }
    }
}