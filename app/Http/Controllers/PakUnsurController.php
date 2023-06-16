<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PakUnsur;

class PakUnsurController extends Controller
{
    public function store(Request $request, $pakID, $parentID)
    {
        $dokumen = time() . '.' . 'unsur' . '.' . $request->dokumen->extension();
        $request->dokumen->storeAs('public/file/', $dokumen);

        $pak_unsur = new PakUnsur;
        $pak_unsur->pak_id = $pakID;
        $pak_unsur->unsur_id = $request->category_id;
        $pak_unsur->title = $request->title;
        $pak_unsur->tahun = $request->year;
        $pak_unsur->nilai = $request->nilai;
        $pak_unsur->dokumen = $dokumen;
        $pak_unsur->save();

        return redirect()->route('pak.unsur.create', [$pakID, $parentID]);
    }
}