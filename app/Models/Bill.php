<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_sp',
        'id_sp',
        'so_luong',
        'size',
        'phone_number',
        'id_khach',
        'ten_khachhang',
        'dia_chi',
        'gia_donhang',
        'ghi_chu'
    ];
}
