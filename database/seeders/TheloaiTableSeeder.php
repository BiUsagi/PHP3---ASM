<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheloaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theloai_asm')->insert([
            ['ten' => 'Đời Sống'],
            ['ten' => 'Thể Thao'],
            ['ten' => 'Esports'],
            ['ten' => 'Ẩm Thực'],
            ['ten' => 'Thời Sự'],
            ['ten' => 'Công Nghệ'],
        ]);
    }
}