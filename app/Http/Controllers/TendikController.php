<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\jenisGuru;
use App\Models\Pangkat;
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
        return view('pages.tendik.create', compact('pangkat', 'jabatan', 'jenisGuru'));
    }

    public function store(Request $request)
    {
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
        // dd($tendik->pendidikan_linear);
        return view('pages.tendik.edit', compact('tendik', 'pangkat', 'jabatan', 'jenisGuru'));
    }

    public function update(Request $request, $id)
    {
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