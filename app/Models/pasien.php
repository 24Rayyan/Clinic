<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'NIK', 'usia', 'alamat'];
    public function tabelUmum()
    {
        return $this->hasOne(TabelUmum::class);
    }

    public function tabelAnak()
    {
        return $this->hasOne(TabelAnak::class);
    }

    public function tabelTHT()
    {
        return $this->hasOne(TabelTHT::class);
    }

    public function tabelSpesialis()
    {
        return $this->hasOne(TabelSpesialis::class);
    }

    public function tabelMata()
    {
        return $this->hasOne(TabelMata::class);
    }

    public function keterangans()
    {
        return $this->hasMany(Keterangan::class, 'NIK', 'NIK');
    }
}
