<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelUmum extends Model
{
    use HasFactory;
    protected $table = 'tabel_umum';

    protected $fillable = [
        'pasien_id',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
