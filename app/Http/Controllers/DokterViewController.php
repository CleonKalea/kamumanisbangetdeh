<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokterView;
use App\Models\JadwalDokter;
use App\Models\JenisKelamin;
use App\Models\Poliklinik;
use Illuminate\Support\ViewErrorBag;

class DokterViewController extends Controller
{
    public function index()
    {
        return view('admin/dokter', [
            "title" => "Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function create()
    {
        $list_poli = Poliklinik::select('id', 'nama_poli')->get();
        $jadwal = JadwalDokter::select('id', 'jam', 'hari', 'tanggal', 'bulan')->get();
        $jk = JenisKelamin::select('id', 'jenis_kelamin')->get();

        return view('crud/dokter-add', [
            "title" => "Dokter Add",
            "list" => $list_poli,
            "jadwal" => $jadwal,
            "jk" => $jk
        ]);
    }

    public function store(Request $request)
    {
        $dokter = new DokterView;
        
        $dokter->nama_dokter = $request->nama;
        $dokter->deskripsi = $request->desc;
        $dokter->jenis_kelamin_id = $request->jk;
        $dokter->poliklinik_id = $request->poli;
        $dokter->jadwal_dokter_id = $request->jadwal;

        $dokter->save();

        return view('admin/dokter', [
            "title" => "Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function edit(Request $request, $id)
    {
        $dokter = DokterView::findOrFail($id);
        $poli = Poliklinik::select('id', 'nama_poli')->get();
        $jadwal = JadwalDokter::select('id', 'jam', 'hari', 'tanggal', 'bulan')->get();
        $jk = JenisKelamin::select('id', 'jenis_kelamin')->get();

        return view('crud/dokter-edit', [
            'title'=>'Dokter Edit',
            'dokter' => $dokter,
            "poli" => $poli,
            "jadwal" => $jadwal,
            "jk" => $jk
        ]);
    }
}
