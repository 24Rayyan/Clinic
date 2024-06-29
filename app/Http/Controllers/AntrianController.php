<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Pasien;
use App\Models\TabelAnak;
use App\Models\TabelMata;
use App\Models\TabelSpesialis;
use App\Models\TabelTHT;
use App\Models\TabelUmum;

class AntrianController extends Controller
{
    public function umum()
    {
        $tabel_umum = TabelUmum::all();
        return view('antrian.Umum', compact('tabel_umum'));
    }


    public function anak()
    {
        $tabel_anak = TabelAnak::all();
        return view('Antrian.Anak', compact('tabel_anak'));
    }

    public function mata()
    {
        $tabel_mata = TabelMata::all();
        return view('Antrian.Mata', compact('tabel_mata'));
    }

    public function tht()
    {
        $tabel_tht = TabelTHT::all();
        return view('Antrian.THT', compact('tabel_tht'));
    }

    public function spesialis()
    {
        $tabel_spesialis = TabelSpesialis::all();
        return view('Antrian.Spesialis', compact('tabel_spesialis'));
    }

    public function addKeterangan($id)
    {
        $antrian = Antrian::findOrFail($id);
        // Tambahkan logika untuk menambahkan keterangan di sini

        return redirect()->back()->with('success', 'Keterangan berhasil ditambahkan');
    }

    
}

