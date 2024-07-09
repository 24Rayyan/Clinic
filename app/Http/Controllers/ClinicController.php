<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\TabelAnak;
use App\Models\TabelMata;
use App\Models\TabelSpesialis;
use App\Models\TabelUmum;
use App\Models\TabelTHT;




class ClinicController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pages.data', compact('pasiens'));
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    //search sama pagination
    public function search(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $pasiens = Pasien::where('nama', 'LIKE', "%{$search}%")
                ->orWhere('NIK', 'LIKE', "%{$search}%")
                ->orWhere('Usia', 'LIKE', "%{$search}%")
                ->orWhere('Alamat', 'LIKE', "%{$search}%")
                ->simplePaginate(10);
        } else {
            $pasiens = Pasien::simplePaginate(10);
        }

        return view('pages.data', compact('pasiens'));
    }


    //create data
    public function create()
    {
        return view('pages.createdata');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|string|max:255',
            'usia' => 'required|integer',
            'alamat' => 'required|string|max:255',
        ]);

        $pasien = Pasien::create($validatedData);

        return redirect()->route('pasiens.index')->with('success', 'Patient data added successfully!');
    }

    //show data 
    public function show(Pasien $pasien)
    {
        return view('pages.show', compact('pasien'));
    }

    //poli
    public function choosePoli(Pasien $pasien)
    {
        return view('pages.poli', compact('pasien'));
    }
    public function choose(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'NIK' => 'required|string|unique:tabel_umum,NIK|unique:tabel_anak,NIK|unique:tabel_mata,NIK|unique:tabel_tht,NIK|unique:tabel_spesialis,NIK',
            'usia' => 'required|integer',
            'alamat' => 'required|string',
            'poli' => 'required|string'
        ]);

        switch ($validatedData['poli']) {
            case 'Poli Umum':
                TabelUmum::create($validatedData);
                break;
            case 'Poli Anak':
                TabelAnak::create($validatedData);
                break;
            case 'Poli Mata':
                TabelMata::create($validatedData);
                break;
            case 'Poli THT':
                TabelTht::create($validatedData);
                break;
            case 'Poli Spesialis':
                TabelSpesialis::create($validatedData);
                break;
            default:
                return redirect()->back()->withErrors(['poli' => 'Poli tidak valid']);
        }

        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil ditambahkan ke antrian.');
    }



}



