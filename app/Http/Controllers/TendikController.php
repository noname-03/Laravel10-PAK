<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\jenisGuru;
use App\Models\Pangkat;
use App\Models\PendidikanStrata;
use App\Models\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        $tendik = Tendik::all();
        return view('pages.tendik.index', compact('tendik'));
    }

    public function create()
    {
        $pangkat = Pangkat::all();
        $jabatan = Jabatan::all();
        $jenisGuru = jenisGuru::all();
        $pendidikanStrata = PendidikanStrata::all();
        return view('pages.tendik.create', compact('pangkat', 'jabatan', 'jenisGuru', 'pendidikanStrata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:tendik',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tugas_kota' => 'required',
            'tugas_sekolah' => 'required',
            'tugas_mengajar' => 'required',
            'pangkat_id' => 'required',
            'pendidikan_strata_id' => 'required:numeric',
            'pendidikan_linear' => 'required',
            'pendidikan_jurusan' => 'required',
            'lahir_tempat' => 'required',
            'lahir_tanggal' => 'required',
            'jabatan_id' => 'required',
            'jenis_guru_id' => 'required',
        ]);
        $request['masa_tahun'] = 0;
        $request['masa_bulan'] = 0;
        $request['jabatan_tanggal'] = '0000-01-31';
        Tendik::create($request->all());
        return redirect()->route('tendik.index');
    }

    public function show(Tendik $tendik)
    {
        //
    }

    public function edit($id)
    {
        $pangkat = Pangkat::all();
        $jabatan = Jabatan::all();
        $jenisGuru = jenisGuru::all();
        $tendik = Tendik::findOrFail($id);
        $pendidikanStrata = PendidikanStrata::all();
        return view('pages.tendik.edit', compact('tendik', 'pangkat', 'jabatan', 'jenisGuru', 'pendidikanStrata'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|unique:tendik',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tugas_kota' => 'required',
            'tugas_sekolah' => 'required',
            'tugas_mengajar' => 'required',
            'pangkat_id' => 'required',
            'pendidikan_strata_id' => 'required:numeric',
            'pendidikan_linear' => 'required',
            'pendidikan_jurusan' => 'required',
            'lahir_tempat' => 'required',
            'lahir_tanggal' => 'required',
            'jabatan_id' => 'required',
            'jenis_guru_id' => 'required',
        ]);
        $request['masa_tahun'] = 0;
        $request['masa_bulan'] = 0;
        $request['jabatan_tanggal'] = '0000-01-31';
        $tendik = Tendik::findOrFail($id);
        $tendik->update($request->all());
        return redirect()->route('tendik.index');
    }

    public function destroy($id)
    {
        $tendik = Tendik::findOrFail($id);
        $tendik->delete();
        return redirect()->route('tendik.index');
    }
}