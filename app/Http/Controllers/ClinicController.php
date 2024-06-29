<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
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
                ->paginate(10);
        } else {
            $pasiens = Pasien::paginate(10);
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
    public function choose(Request $request, $pasien_id)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'poli' => 'required|in:Poli Umum,Poli Anak,Poli THT,Poli Spesialis,Poli Mata',
        ]);

        // Simpan data ke tabel yang sesuai
        switch ($validatedData['poli']) {
            case 'Poli Umum':
                $antrian = new TabelUmum();
                break;
            case 'Poli Anak':
                $antrian = new TabelAnak();
                break;
            case 'Poli THT':
                $antrian = new TabelTHT();
                break;
            case 'Poli Spesialis':
                $antrian = new TabelSpesialis();
                break;
            case 'Poli Mata':
                $antrian = new TabelMata();
                break;
        }

        $antrian->pasien_id = $pasien_id;
        $antrian->save();

        // Redirect sesuai dengan poli yang dipilih
        return redirect()->route('pasiens.index')->with('success', 'Pasien ditambahkan ke antrian ' . $validatedData['poli']);
    }
}


