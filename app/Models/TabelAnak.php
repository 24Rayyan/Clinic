<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelAnak extends Model
{
    protected $table = 'tabel_anak';
    
    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
}


