<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\jenisGuru;
use App\Models\Pak;
use App\Models\PakUnsur;
use App\Models\Pangkat;
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
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();
        $jenisGuru = jenisGuru::all();
        $pangkat = Pangkat::all();
        return view('pages.pak.last', compact('unsur', 'jabatan', 'jenisGuru', 'pangkat'));
    }

    public function lastStore(Request $request)
    {
        $nilaiIdArray = $request->nilaiId;

        $tendik = new Tendik;
        $tendik->pangkat_id = $request->pangkat_id;
        $tendik->jabatan_id = $request->jabatan_id;
        $tendik->jenis_guru_id = $request->jenis_guru_id;
        $tendik->nip = $request->nip;
        $tendik->nama = $request->nama;
        $tendik->jenis_kelamin = $request->jenis_kelamin;
        $tendik->tugas_kota = $request->tugas_kota;
        $tendik->tugas_sekolah = $request->tugas_sekolah;
        $tendik->tugas_mengajar = $request->tugas_mengajar;
        $tendik->masa_tahun = $request->masa_tahun;
        $tendik->masa_bulan = $request->masa_bulan;
        $tendik->pendidikan_linear = $request->pendidikan_linear;
        $tendik->pangkat_tanggal = $request->pangkat_tanggal;
        $tendik->pendidikan_strata = $request->pendidikan_strata;
        $tendik->pendidikan_jurusan = $request->pendidikan_jurusan;
        $tendik->lahir_tempat = $request->lahir_tempat;
        $tendik->lahir_tanggal = $request->lahir_tanggal;
        $tendik->jabatan_tanggal = $request->jabatan_tanggal;
        $tendik->save();

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
        return view('pages.pak.index', compact('pak'));
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