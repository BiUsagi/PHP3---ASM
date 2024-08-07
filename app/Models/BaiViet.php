<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $table = 'baiviet';

    protected $fillable = [
        'id',
        'id_loai',
        'ten_bai',
        'noi_dung',
        'mo_ta',
        'hinh_anh',
        'luot_xem',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Một bài viết có nhiều bình luận
    public function binhluans()
    {
        return $this->hasMany(BinhLuan::class, 'id_baiviet');
    }


    // Một bài viết thuộc về một thể loại
    public function theloai()
    {
        return $this->belongsTo(Theloai::class, 'id_loai');
    }
}