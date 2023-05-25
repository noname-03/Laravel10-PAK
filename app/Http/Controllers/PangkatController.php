<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePangkatRequest;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function index()
    {
        $pangkat = Pangkat::all();
        return view('pages.pangkat.index', compact('pangkat'));
    }

    public function create()
    {
        return view('pages.pangkat.create');
    }

    public function store(StorePangkatRequest $request)
    {
        Pangkat::create($request->all());
        return redirect()->route('pangkat.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pangkat = Pangkat::findOrFail($id);
        return view('pages.pangkat.edit', compact('pangkat'));
    }

    public function update(StorePangkatRequest $request, $id)
    {
        $pangkat = Pangkat::findOrFail($id);
        $pangkat->update($request->all());
        return redirect()->route('pangkat.index');
    }

    public function destroy($id)
    {
        $pangkat = Pangkat::findOrFail($id);
        $pangkat->delete();
        return redirect()->route('pangkat.index');
    }
}