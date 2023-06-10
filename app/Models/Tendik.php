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
        'nip',
        'nama',
        'jenis_kelamin',
        'tugas_kota',
        'tugas_sekolah',
        'masa_tahun',
        'masa_bulan',
        'pendidikan_linear',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'nip', 'nip');
    }
}