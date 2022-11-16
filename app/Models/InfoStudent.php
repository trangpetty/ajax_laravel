<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoStudent extends Model
{
    use HasFactory;
    protected $table = 'info_student';
    protected $fillable = ['hoten', 'gioitinh', 'ngaysinh', 'sdt', 'diachi'];
}
