<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\TabelAnak;
use App\Models\TabelMata;
use App\Models\TabelSpesialis;
use App\Models\TabelUmum;
use App\Models\TabelTHT;


class PasienController extends Controller
{
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pages.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return redirect()->route('pasiens.show', $id)->with('success', 'Data pasien berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil dihapus');
    }

    public function truncateMata()
    {
        TabelMata::truncate(); // Menghapus semua data di tabel_mata

        return redirect()->back();
    }

    public function truncateSpesialis()
    {
        TabelSpesialis::truncate(); // Menghapus semua data di tabel_mata

        return redirect()->back();
    }

    public function truncateUmum()
    {
        TabelUmum::truncate(); // Menghapus semua data di tabel_mata

        return redirect()->back();
    }

    public function truncateAnak()
    {
        TabelAnak::truncate(); // Menghapus semua data di tabel_mata

        return redirect()->back();
    }

    public function truncateTHT()
    {
        TabelTHT::truncate(); // Menghapus semua data di tabel_mata

        return redirect()->back();
    }
}
