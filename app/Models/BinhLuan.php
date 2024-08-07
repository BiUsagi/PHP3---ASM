<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;

    protected $table = 'binhluan';

    protected $fillable = [
        'noi_dung',
        'id_baiviet',
        'user_id',
    ];

    // Một bình luận thuộc về một bài viết
    public function baiviet()
    {
        return $this->belongsTo(BaiViet::class, 'id_baiviet');
    }

    // Một bình luận thuộc về một người dùng
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}