<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
    use HasFactory;

    protected $table = 'tendik';

    protected $fillable = [
        'pangkat_id',
        'jabatan_id',
        'jenis_guru_id',
        'pendidikan_strata_id',
        'nip',
        'nama',
        'jenis_kelamin',
        'tugas_kota',
        'tugas_sekolah',
        'tugas_mengajar',
        'masa_tahun',
        'masa_bulan',
        'pendidikan_linear',
        'pangkat_tanggal',
        'pendidikan_jurusan',
        'lahir_tempat',
        'lahir_tanggal',
        'jabatan_tanggal',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'nip', 'nip');
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function jenisGuru()
    {
        return $this->belongsTo(JenisGuru::class);
    }

    public function pendidikanStrata()
    {
        return $this->belongsTo(PendidikanStrata::class);
    }
}