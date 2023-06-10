<?php

namespace App\Http\Controllers;

use App\Models\jenisGuru;
use Illuminate\Http\Request;

class JenisGuruController extends Controller
{
    public function index()
    {
        $jenisGuru = jenisGuru::all();
        return view('pages.jenisGuru.index', compact('jenisGuru'));
    }

    public function create()
    {
        return view('pages.jenisGuru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:jenis_guru,title'
        ]);

        jenisGuru::create($request->all());
        return redirect()->route('jenisGuru.index');
    }

    public function edit($id)
    {
        $jenisGuru = jenisGuru::find($id);
        return view('pages.jenisGuru.edit', compact('jenisGuru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:jenis_guru,title,' . $id
        ]);

        $jenisGuru = jenisGuru::find($id);
        $jenisGuru->update($request->all());
        return redirect()->route('jenisGuru.index');
    }

    public function destroy($id)
    {
        $jenisGuru = jenisGuru::find($id);
        $jenisGuru->delete();
        return redirect()->route('jenisGuru.index');
    }

}