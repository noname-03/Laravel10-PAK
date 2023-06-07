<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unsur;

class UnsurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $unsur = Unsur::all();
        return view('pages.unsur.index', compact('unsur'));
    }

    public function create()
    {
        $unsur = Unsur::all();
        return view('pages.unsur.create', compact('unsur'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
        ]);

        Unsur::create($request->all());

        return redirect()->route('unsur.index')
            ->with('success', 'Unsur created successfully.');
    }

    public function edit($id)
    {
        $unsur = Unsur::findOrFail($id);
        $unsurs = Unsur::all();
        return view('pages.unsur.edit', compact('unsur', 'unsurs'));
    }

    public function update($id, Request $request)
    {
        $unsur = Unsur::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'year' => 'required',
        ]);

        $unsur->update($request->all());
        return redirect()->route('unsur.index')
            ->with('success', 'Unsur updated successfully');
    }

    public function destroy($id)
    {
        $unsur = Unsur::findOrFail($id);
        $unsur->delete();
        return redirect()->route('unsur.index')
            ->with('success', 'Unsur deleted successfully');
    }
}