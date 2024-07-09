<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangan';
    protected $fillable = ['NIK', 'keterangan'];
    
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}