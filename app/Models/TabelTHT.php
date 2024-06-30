<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelTHT extends Model
{
    protected $table = 'tabel_tht';
    
    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
}
