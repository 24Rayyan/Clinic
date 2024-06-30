<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelSpesialis extends Model
{
    protected $table = 'tabel_spesialis';
    
    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
}
