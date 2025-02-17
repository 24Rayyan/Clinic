<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'poli'
    ];

    // Relasi ke model Pasien jika diperlukan
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
