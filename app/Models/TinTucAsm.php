<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTucAsm extends Model
{
    use HasFactory;

    protected $table = 'tin_tuc_asms';

    protected $fillable = [
        'id',
        'theloai_id',
        'ten',
        'noidung',
        'mota',
        'ngaydang',
        'hinhanh',
        'luotxem',
        'created_at',
        'updated_at',
    ];
}