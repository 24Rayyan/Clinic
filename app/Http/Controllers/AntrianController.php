<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\keterangan;
use App\Models\pasien;
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

    public function create($id)
    {
        $pasien = pasien::findOrFail($id);
        // Tambahkan logika untuk menambahkan keterangan di sini

        return view('pages.keterangan', compact('pasien'));
    }
    public function push(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|string|exists:pasiens,NIK',
            'keterangan' => 'required|string',
        ]);

        $pasien = Pasien::where('NIK', $validatedData['NIK'])->firstOrFail();

        keterangan::create([
            'NIK' => $pasien->NIK,
            'keterangan' => $validatedData['keterangan'],
            'tanggal' => now(),
        ]);

        return redirect()->route('index', $pasien->NIK,)->with('success', 'Keterangan berhasil ditambahkan.');
    }

    
}

