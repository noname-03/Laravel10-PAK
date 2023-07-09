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
use Illuminate\Support\Facades\Storage;
use Auth;

class PakController extends Controller
{
    public function last()
    {
        $count = Unsur::count();
        $jabatan = Jabatan::all();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

        $unsur->transform(function ($obj) {
            $obj['count'] = $obj['children']->count();

            foreach ($obj['children'] as $child) {
                $child['count'] = $child['children']->count();
                $obj['count'] += $child['count']; // Menambahkan count child pertama ke count parent

                foreach ($child['children'] as $grandchild) {
                    $grandchild['count'] = $grandchild['children']->count();
                    $obj['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent
                    $child['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent

                }
            }

            return $obj;
        });
        $jenisGuru = jenisGuru::all();
        $pangkat = Pangkat::all();
        $tendik = Tendik::where('nip', Auth::user()->nip)->first();
        $pendidikanStrata = PendidikanStrata::all();
        return view('pages.pak.last', compact('unsur', 'jabatan', 'jenisGuru', 'pangkat', 'tendik', 'pendidikanStrata'));
    }

    public function lastStore(Request $request)
    {
        $nilaiIdArray = $request->nilaiId;

        $pak = new Pak;

        $dokPakTerkhirName = time() . '.' . 'pak_terakhir' . '.' . $request->pak_terakhir->extension();
        $request->pak_terakhir->storeAs('public/file/', $dokPakTerkhirName);
        $pak->dok_pak_terakhir = $dokPakTerkhirName;

        $pak->dok_pak_penyesuaian = 'tidak ada';

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
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('penilai')) {
            $dataPak = Pak::with('user.tendik') // Menggunakan eager loading untuk memuat data terkait
                ->get();
            $count = 0;
        } else if (Auth::user()->hasRole('user')) {
            $dataPak = Pak::where('user_id', Auth::user()->id)->with('user.tendik')->get();
            $count = Pak::where('user_id', Auth::user()->id)->with('user.tendik')->count();
        }
        return view('pages.pak.index', compact('dataPak', 'count'));
    }

    public function create()
    {
        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

        return view('pages.pak.create', compact('unsur'));
    }

    public function biodata()
    {
        $tendik = Tendik::where('nip', Auth::user()->nip)->first();
        $jenisGuru = jenisGuru::all();

        return view('pages.pak.biodata', compact('tendik', 'jenisGuru'));
    }

    public function biodataStore(Request $request)
    {

        $pak = new Pak;

        $dokPakTerkhirName = time() . '.' . Auth::user()->name . '.' . 'pak_terakhir' . '.' . $request->pak_terakhir->extension();
        $request->pak_terakhir->storeAs('public/file/', $dokPakTerkhirName);
        $pak->dok_pak_terakhir = $dokPakTerkhirName;

        $pak->dok_pak_penyesuaian = 'tidak ada';

        $dokPangkatTerakhir = time() . '.' . Auth::user()->name . '.' . 'pangkat_terakhir' . '.' . $request->pangkat_terakhir->extension();
        $request->pangkat_terakhir->storeAs('public/file/', $dokPangkatTerakhir);
        $pak->dok_pangkat_terakhir = $dokPangkatTerakhir;

        $dokIjazahTerakhir = time() . '.' . Auth::user()->name . '.' . 'ijazah_terakhir' . '.' . $request->ijazah_terakhir->extension();
        $request->ijazah_terakhir->storeAs('public/file/', $dokIjazahTerakhir);
        $pak->dok_ijazah_terakhir = $dokIjazahTerakhir;

        $pak->user_id = Auth::user()->id;
        $pak->jenis_guru_id = $request->jenis_guru_id;
        $pak->tugas_kota = $request->tugas_kota;
        $pak->tugas_sekolah = $request->tugas_sekolah;
        $pak->tugas_mengajar = $request->tugas_mengajar;
        $pak->status = "menunggu";
        $pak->pak_priode = $request->pak_priode;
        $pak->save();

        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

        $unsur = $unsur->reduce(function ($carry, $obj) {
            foreach ($obj->children as $item) {
                $carry[] = $item->toArray();
            }
            return $carry;
        }, []);

        $data = $unsur;
        $id = $data[0]['id']; // ID yang sedang diproses

        return redirect()->route('pak.unsur.create', [$pak->id, $id]);
    }

    public function unsurCreate($pakID, $unsurID)
    {
        $pak = Pak::findOrFail($pakID);
        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

        $parent_id = $unsurID; // parent_id yang diinginkan
        $pak_id = $pakID; // pak_id yang diinginkan

        $childIds = Unsur::where('parent_id', $parent_id)->pluck('id'); //mengambil id unsur anak
        $grandchildIds = Unsur::whereIn('parent_id', $childIds)->pluck('id'); //mengambil id unsur cucu

        $pakUnsurs = PakUnsur::whereIn('unsur_id', $grandchildIds)
            ->where('pak_id', $pak_id)
            ->get(); //mengambil data pak unsur berdasarkan pak_id dan id unsur cucu


        $unsur = $unsur->reduce(function ($carry, $obj) {
            foreach ($obj->children as $item) {
                $carry[] = $item->toArray();
            }
            return $carry;
        }, []);

        $data = $unsur;
        $id = $unsurID; // ID yang sedang diproses
        $dataSekarang = null; // Data dengan ID yang sedang diproses
        $prev = null; // ID sebelumnya
        $next = null; // ID selanjutnya

        foreach ($data as $item) {
            if ($item['id'] == $id) {
                $dataSekarang = $item;
                break;
            }
        }

        if ($dataSekarang) {
            $key = array_search($dataSekarang, $data);

            if ($key > 0) {
                $prev = $data[$key - 1]['id'];
            }

            if ($key < count($data) - 1) {
                $next = $data[$key + 1]['id'];
            }
        }

        return view('pages.pak.unsur', compact('dataSekarang', 'pak', 'pakUnsurs', 'prev', 'next'));
    }

    public function confirm($pakID)
    {
        $dataPak = Pak::findOrFail($pakID);
        $userId = $dataPak->user_id;
        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();
        $pak = Pak::where('user_id', $userId)
            ->where('created_at', '<', Pak::select('created_at')
                ->where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->first()->created_at)
            ->get();


        $unsur->transform(function ($obj) use ($pakID, $pak) {
            $obj['count'] = $obj['children']->count(); //unsur utama

            foreach ($obj['children'] as $child) {
                $child['count'] = $child['children']->count(); // pendidikan dan setingkatnya
                $obj['count'] += $child['count']; // Menambahkan count child pertama ke count parent

                foreach ($child['children'] as $grandchild) {
                    $grandchild['count'] = $grandchild['children']->count(); // mengikuti pendidikan dan setingkatnya
                    $obj['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent
                    $child['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent

                    foreach ($grandchild['children'] as $greatGrandchild) {
                        $greatGrandchild['count'] = $greatGrandchild['children']->count(); // mengikuti pendidikan dan setingkatnya
                        $obj['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent
                        $grandchild['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent
                        $child['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent

                        // Tambahkan field nilai lama
                        $nilaiLama = $greatGrandchild['nilai'];

                        foreach ($pak as $item) {
                            // Mendapatkan nilai berdasarkan pak_id dan unsur_id dari PakUnsur
                            $pakUnsurs = PakUnsur::where('pak_id', $item->id)
                                ->where('unsur_id', $greatGrandchild->id)
                                ->get();

                            if ($pakUnsurs->count() > 0) {
                                foreach ($pakUnsurs as $pakUnsur) {
                                    $nilaiLama += $pakUnsur->nilai;
                                }
                            }
                        }

                        $greatGrandchild['nilai_lama'] = $nilaiLama;

                        // Mendapatkan nilai berdasarkan pak_id dan unsur_id dari PakUnsur
                        $pakUnsurs = PakUnsur::where('pak_id', $pakID)
                            ->where('unsur_id', $greatGrandchild->id)
                            ->get();

                        if ($pakUnsurs->count() > 0) {
                            $nilai = $greatGrandchild['nilai'];
                            foreach ($pakUnsurs as $pakUnsur) {
                                // dd($pakUnsur);
                                $nilai += $pakUnsur->nilai;
                            }
                            $greatGrandchild['nilai'] = $nilai; // Mengubah nilai pada grandchild
                        } else {
                            $greatGrandchild['nilai'] = null; // Atur nilai menjadi null jika tidak ditemukan
                        }
                    }
                }
            }

            return $obj;
        });


        return view('pages.pak.confirm', compact('unsur'));
    }

    function getNilaiLama($data, $pakId, $unsurId)
    {
        // dd($data);
        foreach ($data->pakUnsur as $item) {
            $pakUnsurs = PakUnsur::where('pak_id', $pakId)
                ->where('unsur_id', $unsurId)
                ->get();

            // return response()->json($pakUnsurs);

            if ($pakUnsurs->count() > 0) {
                $nilai = $item->nilai;
                foreach ($pakUnsurs as $pakUnsur) {
                    $nilai += $pakUnsur->nilai;
                }
                return $item->nilai_lama = $nilai; // Mengubah nilai pada item
            } else {
                return $item->nilai_lama = null; // Atur nilai menjadi null jika tidak ditemukan
            }
        }
    }

    public function biodataEdit($id)
    {
        $pak = Pak::findOrFail($id);
        $tendik = Tendik::where('nip', Auth::user()->nip)->first();
        $jenisGuru = jenisGuru::all();

        return view('pages.pak.edit', compact('tendik', 'jenisGuru', 'pak'));

    }

    public function biodataUpdate(Request $request, $id)
    {
        $pak = Pak::findOrFail($id);

        if ($request->hasFile('pak_terakhir')) {
            $dokPakTerkhirName = time() . '.' . Auth::user()->name . '.' . 'pak_terakhir' . '.' . $request->pak_terakhir->extension();
            $request->pak_terakhir->storeAs('public/file/', $dokPakTerkhirName);
            Storage::delete('public/file/' . $pak->dok_pak_terakhir);
        } else {
            $dokPakTerkhirName = $pak->dok_pak_terakhir;
        }

        if ($request->hasFile('pangkat_terakhir')) {
            $dokPangkatTerakhir = time() . '.' . Auth::user()->name . '.' . 'pangkat_terakhir' . '.' . $request->pangkat_terakhir->extension();
            $request->pangkat_terakhir->storeAs('public/file/', $dokPangkatTerakhir);
            Storage::delete('public/file/' . $pak->dok_pangkat_terakhir);
        } else {
            $dokPangkatTerakhir = $pak->dok_pangkat_terakhir;
        }

        if ($request->hasFile('ijazah_terakhir')) {
            $dokIjazahTerakhir = time() . '.' . Auth::user()->name . '.' . 'ijazah_terakhir' . '.' . $request->ijazah_terakhir->extension();
            $request->ijazah_terakhir->storeAs('public/file/', $dokIjazahTerakhir);
            Storage::delete('public/file/' . $pak->dok_ijazah_terakhir);
        } else {
            $dokIjazahTerakhir = $pak->dok_ijazah_terakhir;
        }

        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('penilai')) {
            $by_user_id = Auth::user()->id;
        } else {
            $by_user_id = $pak->by_user_id;
        }

        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('penilai')) {
            $status = $request->status;
        } else {
            $status = $pak->status;
        }


        $pak->update([
            'user_id' => $pak->user_id,
            'jenis_guru_id' => $request->jenis_guru_id,
            'tugas_kota' => $request->tugas_kota,
            'tugas_sekolah' => $request->tugas_sekolah,
            'tugas_mengajar' => $request->tugas_mengajar,
            'status' => $status,
            'pak_priode' => $request->pak_priode,
            'dok_pak_terakhir' => $dokPakTerkhirName,
            'dok_pak_penyesuaian' => 'tidak ada',
            'dok_pangkat_terakhir' => $dokPangkatTerakhir,
            'dok_ijazah_terakhir' => $dokIjazahTerakhir,
            'note' => $request->note,
            'by_user_id' => $by_user_id,
        ]);

        $count = Unsur::count();
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();

        $unsur = $unsur->reduce(function ($carry, $obj) {
            foreach ($obj->children as $item) {
                $carry[] = $item->toArray();
            }
            return $carry;
        }, []);

        $data = $unsur;
        $id = $data[0]['id']; // ID yang sedang diproses

        return redirect()->route('pak.unsur.create', [$pak->id, $id]);
    }

    public function destroy($id)
    {
        $pak = Pak::findOrFail($id);
        Storage::delete('public/file/' . $pak->dok_pak_terakhir);
        // Storage::delete('public/file/' . $pak->dok_pak_penyesuaian);
        Storage::delete('public/file/' . $pak->dok_pangkat_terakhir);
        Storage::delete('public/file/' . $pak->dok_ijazah_terakhir);
        $pak->delete();
        return redirect()->route('pak.index');
    }

    public function show($id)
    {
        $dataPak = Pak::findOrFail($id);
        $count = Unsur::count();
        $userId = $dataPak->user->id;
        $unsur = Unsur::where('parent_id', null)->with(str_repeat('children.', $count))->get();
        $pak = Pak::where('user_id', $userId)
            ->where('created_at', '<', Pak::select('created_at')
                ->where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->first()->created_at)
            ->get();


        $unsur->transform(function ($obj) use ($id, $pak) {
            $obj['count'] = $obj['children']->count(); //unsur utama

            foreach ($obj['children'] as $child) {
                $child['count'] = $child['children']->count(); // pendidikan dan setingkatnya
                $obj['count'] += $child['count']; // Menambahkan count child pertama ke count parent

                foreach ($child['children'] as $grandchild) {
                    $grandchild['count'] = $grandchild['children']->count(); // mengikuti pendidikan dan setingkatnya
                    $obj['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent
                    $child['count'] += $grandchild['count']; // Menambahkan count child kedua ke count parent

                    foreach ($grandchild['children'] as $greatGrandchild) {
                        $greatGrandchild['count'] = $greatGrandchild['children']->count(); // mengikuti pendidikan dan setingkatnya
                        $obj['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent
                        $grandchild['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent
                        $child['count'] += $greatGrandchild['count']; // Menambahkan count child kedua ke count parent

                        // Tambahkan field nilai lama
                        $nilaiLama = $greatGrandchild['nilai'];

                        foreach ($pak as $item) {
                            // Mendapatkan nilai berdasarkan pak_id dan unsur_id dari PakUnsur
                            $pakUnsurs = PakUnsur::where('pak_id', $item->id)
                                ->where('unsur_id', $greatGrandchild->id)
                                ->get();

                            if ($pakUnsurs->count() > 0) {
                                foreach ($pakUnsurs as $pakUnsur) {
                                    $nilaiLama += $pakUnsur->nilai;
                                }
                            }
                        }

                        $greatGrandchild['nilai_lama'] = $nilaiLama;

                        // Mendapatkan nilai berdasarkan pak_id dan unsur_id dari PakUnsur
                        $pakUnsurs = PakUnsur::where('pak_id', $id)
                            ->where('unsur_id', $greatGrandchild->id)
                            ->get();

                        if ($pakUnsurs->count() > 0) {
                            $nilai = $greatGrandchild['nilai'];
                            foreach ($pakUnsurs as $pakUnsur) {
                                // dd($pakUnsur);
                                $nilai += $pakUnsur->nilai;
                            }
                            $greatGrandchild['nilai'] = $nilai; // Mengubah nilai pada grandchild
                        } else {
                            $greatGrandchild['nilai'] = null; // Atur nilai menjadi null jika tidak ditemukan
                        }
                    }
                }
            }

            return $obj;
        });
        return view('pages.pak.show', compact('dataPak', 'unsur'));
    }
}