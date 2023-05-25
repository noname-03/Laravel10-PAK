<?php

namespace App\Http\Controllers;

use App\Http\Requests\JabatanRequest;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('pages.jabatan.index', compact('jabatan'));
    }

    public function create()
    {
        return view('pages.jabatan.create');
    }

    public function store(JabatanRequest $request)
    {
        Jabatan::create($request->all());
        return redirect()->route('jabatan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('pages.jabatan.edit', compact('jabatan'));
    }

    public function update(JabatanRequest $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($request->all());
        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index');
    }
}