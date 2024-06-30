<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelMata extends Model
{
    protected $table = 'tabel_mata';
    
    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
}
