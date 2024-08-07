<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaiViet;
use App\Models\BinhLuan;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

// Một người dùng (User) có thể có nhiều bài viết (BaiViet).
    public function BaiViet()
    {
        return $this->hasMany(BaiViet::class);
    }

    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class);
    }
    
}