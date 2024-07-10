<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keterangan;
use App\Models\pasien;
use App\Models\TabelAnak;
use App\Models\TabelMata;
use App\Models\TabelSpesialis;
use App\Models\TabelTHT;
use App\Models\TabelUmum;

// VIEW TABEL ANTRIAN POLI
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


    // CREATE KETERANGAN
    public function create($NIK)
    {
        $pasien = pasien::where('NIK', $NIK)->firstOrFail();
        return view('pages.keterangan', compact('pasien'));
    }
    public function push(Request $request)
    {
        $validatedData = $request->validate([
            'pasien_NIK' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        Keterangan::create([
            'NIK' => $validatedData['pasien_NIK'],
            'keterangan' => $validatedData['keterangan'],
        ]);
        return redirect()->route('dashboard');
        
    }


    //NOMER ANTRIAN 
    public function getTotalAntrian()
    {
        $totalAntrian = TabelMata::count();
        return $totalAntrian;
    }

    public function index()
    {
        $nomorAntrianMata = session('nomor_antrian_mata', 1);
        $nomorAntrianUmum = session('nomor_antrian_umum', 1);
        $nomorAntrianAnak = session('nomor_antrian_anak', 1);
        $nomorAntrianTHT = session('nomor_antrian_tht', 1);
        $nomorAntrianSpesialis = session('nomor_antrian_spesialis', 1);
    
        $totalAntrianMata = TabelMata::count();
        $totalAntrianUmum = TabelUmum::count();
        $totalAntrianAnak = TabelAnak::count();
        $totalAntrianTHT = TabelTHT::count();
        $totalAntrianSpesialis = TabelSpesialis::count();
    
        return view('pages.dashboard', compact(
            'nomorAntrianMata', 'totalAntrianMata',
            'nomorAntrianUmum', 'totalAntrianUmum',
            'nomorAntrianAnak', 'totalAntrianAnak',
            'nomorAntrianTHT', 'totalAntrianTHT',
            'nomorAntrianSpesialis', 'totalAntrianSpesialis'
        ));
    }

    public function nextNomorAntrian(Request $request, $poli)
    {
        $nomorAntrianSekarangKey = 'nomor_antrian_' . $poli;
        $nomorAntrianSekarang = session($nomorAntrianSekarangKey, 1);
    
        switch ($poli) {
            case 'mata':
                $totalAntrian = TabelMata::count();
                break;
            case 'umum':
                $totalAntrian = TabelUmum::count();
                break;
            case 'anak':
                $totalAntrian = TabelAnak::count();
                break;
            case 'tht':
                $totalAntrian = TabelTHT::count();
                break;
            case 'spesialis':
                $totalAntrian = TabelSpesialis::count();
                break;
            default:
                $totalAntrian = 0;
                break;
        }
    
        if ($nomorAntrianSekarang < $totalAntrian) {
            $nomorAntrianSekarang++;
            session([$nomorAntrianSekarangKey => $nomorAntrianSekarang]);
        }
    
        return redirect()->route('dashboard');
    }

    public function resetQueue($poli)
    {
        $nomorAntrianKey = 'nomor_antrian_' . $poli;
        session([$nomorAntrianKey => 1]);

        return redirect()->route('dashboard');
    }




}

