<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Auth;
use App\Models\Pangkat;
use App\Models\Jabatan;
use App\Models\jenisGuru;
use App\Models\PendidikanStrata;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.user.index', compact('users'));
    }

    public function create()
    {
        $role = Role::all();
        return view('pages.user.create', compact('role'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // validation
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->role);

        return redirect()->route('user.index');
    }

    public function show($id)
    {
        return view('pages.user.show');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $role = Role::all();
        return view('pages.user.edit', compact('user', 'role'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        $user->update($input);
        if (!empty($input['role'])) {
            $user->syncRoles($request->input('role'));
        } else {
            $user->removeRole($user->roles->pluck('name')[0]);
        }
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function profile()
    {
        $pangkat = Pangkat::all();
        $jabatan = Jabatan::all();
        $jenisGuru = jenisGuru::all();
        $pendidikanStrata = PendidikanStrata::all();
        $nip = Auth::user()->nip;
        $tendik = Tendik::where('nip', $nip)->first();
        return view('pages.user.profile', compact('tendik', 'pangkat', 'jabatan', 'jenisGuru', 'pendidikanStrata'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tugas_kota' => 'required',
            'tugas_sekolah' => 'required',
            'tugas_mengajar' => 'required',
            'pangkat_id' => 'required',
            'pendidikan_strata_id' => 'required:numeric',
            'pendidikan_linear' => 'required',
            'pendidikan_jurusan' => 'required',
            'lahir_tempat' => 'required',
            'lahir_tanggal' => 'required',
            'jabatan_id' => 'required',
            'jenis_guru_id' => 'required',
        ]);
        $request['masa_tahun'] = 0;
        $request['masa_bulan'] = 0;
        $request['jabatan_tanggal'] = '0000-01-31';
        $tendik = Tendik::findOrFail($id);
        $tendik->update($request->all());
        return redirect()->route('home');
    }
}
