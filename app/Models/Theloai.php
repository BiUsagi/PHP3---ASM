<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    use HasFactory;

    protected $table = 'theloai';

    protected $fillable = [
        'id',
        'ten',
        'created_at',
        'updated_at',
    ];


     // Một thể loại có nhiều bài viết
     public function baiviets()
     {
         return $this->hasMany(BaiViet::class, 'id_loai');
     }
}