<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelUmum extends Model
{
    // Tentukan nama tabel secara eksplisit jika berbeda dari konvensi penamaan default
    protected $table = 'tabel_umum';
    
    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
}
