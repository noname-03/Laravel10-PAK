<?php

namespace App\Http\Controllers;

use App\Models\Unsur;
use Illuminate\Http\Request;

class PakController extends Controller
{
    public function last()
    {
        return view('pages.pak.last');
    }

    public function category(Request $request)
    {
        // dd($request->all());
        $regencies = Unsur::where('parent_id', $request->get('id'))
            ->orderBy('title', 'ASC')->pluck('title', 'id');
        return response()->json($regencies);
    }
    public function index()
    {
        return view('pages.pak.index');
    }

    public function create()
    {
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', 99))->get();
        // return $unsur;

        return view('pages.pak.create', compact('unsur'));
    }

    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}