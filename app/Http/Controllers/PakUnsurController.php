<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PakUnsur;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, $pakID, $parentID, $pakUnsurID)
    {
        $pak_unsur = PakUnsur::find($pakUnsurID);
        $pak_unsur->update([
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('pak.unsur.create', [$pakID, $parentID]);
    }

    public function destroy($pakID, $parentID, $pakUnsurID)
    {
        $pak_unsur = PakUnsur::find($pakUnsurID);
        Storage::delete('public/file/' . $pak_unsur->dokumen);
        $pak_unsur->delete();

        return redirect()->route('pak.unsur.create', [$pakID, $parentID]);
    }
}