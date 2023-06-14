<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\jenisGuru;
use App\Models\Pak;
use App\Models\PakUnsur;
use App\Models\Pangkat;
use App\Models\PendidikanStrata;
use App\Models\Tendik;
use App\Models\Unsur;
use Illuminate\Http\Request;
use Auth;

class PakController extends Controller
{
    public function last()
    {
        $count = Unsur::count();
        $jabatan = Jabatan::all();
        // $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();
        $unsur = Unsur::where('parent_id', null)->with('children.children')->get();
        $unsur->transform(function ($obj) {
            $obj['count'] = $obj['children']->count();
            foreach ($obj['children'] as $child) {
                $child['count'] = $child['children']->count();
                $obj['count'] += $child['count']; // Menambahkan count child ke count parent
            }
            return $obj;
        });

        $jenisGuru = jenisGuru::all();
        $pangkat = Pangkat::all();
        $tendik = Tendik::where('nip', Auth::user()->nip)->first();
        $pendidikanStrata = PendidikanStrata::all();
        return view('pages.pak.last', compact('unsur', 'jabatan', 'jenisGuru', 'pangkat', 'tendik', 'pendidikanStrata'));
    }


    function countData($data)
    {
        $count = 0;

        // Iterasi setiap child
        foreach ($data['children'] as $child) {
            $count++; // Tambahkan 1 untuk setiap child
            $count += countData($child); // Rekursi untuk child berikutnya
        }

        return $count;
    }

    public function lastStore(Request $request)
    {
        $nilaiIdArray = $request->nilaiId;

        $pak = new Pak;

        $dokPakTerkhirName = time() . '.' . 'pak_terakhir' . '.' . $request->pak_terakhir->extension();
        $request->pak_terakhir->storeAs('public/file/', $dokPakTerkhirName);
        $pak->dok_pak_terakhir = $dokPakTerkhirName;

        $dokPakPenyesuaian = time() . '.' . 'pak_penyesuaian' . '.' . $request->pak_penyesuaian->extension();
        $request->pak_penyesuaian->storeAs('public/file/', $dokPakPenyesuaian);
        $pak->dok_pak_penyesuaian = $dokPakPenyesuaian;

        $dokPangkatTerakhir = time() . '.' . 'pangkat_terakhir' . '.' . $request->pangkat_terakhir->extension();
        $request->pangkat_terakhir->storeAs('public/file/', $dokPangkatTerakhir);
        $pak->dok_pangkat_terakhir = $dokPangkatTerakhir;

        $dokIjazahTerakhir = time() . '.' . 'ijazah_terakhir' . '.' . $request->ijazah_terakhir->extension();
        $request->ijazah_terakhir->storeAs('public/file/', $dokIjazahTerakhir);
        $pak->dok_ijazah_terakhir = $dokIjazahTerakhir;

        $pak->user_id = Auth::user()->id;
        $pak->jenis_guru_id = $request->jenis_guru_id;
        $pak->tugas_kota = $request->tugas_kota;
        $pak->tugas_sekolah = $request->tugas_sekolah;
        $pak->tugas_mengajar = $request->tugas_mengajar;
        $pak->status = "menunggu";
        $pak->pak_no = $request->pak_no;
        $pak->pak_awal = $request->pak_awal;
        $pak->pak_akhir = $request->pak_akhir;
        $pak->pak_priode = $request->pak_priode;
        $pak->save();

        foreach ($nilaiIdArray as $key => $value) {
            $pak_unsur = new PakUnsur;
            $pak_unsur->pak_id = $pak->id;
            $pak_unsur->unsur_id = $key;
            $pak_unsur->nilai = $value;
            $pak_unsur->save();
        }

        return redirect()->route('pak.index');

    }

    public function category(Request $request)
    {
        $regencies = Unsur::where('parent_id', $request->get('id'))
            ->orderBy('title', 'ASC')->pluck('title', 'id');
        return response()->json($regencies);
    }
    public function index()
    {
        $pak = Pak::all();
        $tendik = Tendik::where('nip', Auth::user()->nip)->first();
        return view('pages.pak.index', compact('pak', 'tendik'));
    }

    public function create()
    {
        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

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