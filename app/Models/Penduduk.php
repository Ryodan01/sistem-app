<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [    
    'nama',
    'nik',
    'tgl_lahir',
    'kelamin',
    'agama',
    'no_hp',
    'pekerjaan',
    'alamat',
    ];


}
