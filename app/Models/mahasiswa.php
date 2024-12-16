<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama_mahasiswa', 'jk', 'tgl_lahir', 'alamat'];
    protected $table = 'mahasiswa';
}
