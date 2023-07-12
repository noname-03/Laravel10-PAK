<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\JenisGuru;
use App\Models\PakUnsur;


class Pak extends Model
{
    use HasFactory;

    protected $table = 'pak';

    protected $fillable = [
        'user_id',
        'jenis_guru_id',
        'tugas_kota',
        'tugas_sekolah',
        'tugas_mengajar',
        'dok_pak_terakhir',
        'dok_pak_penyesuaian',
        'dok_pangkat_terakhir',
        'dok_ijazah_terakhir',
        'status',
        'pak_no',
        'pak_awal',
        'pak_akhir',
        'pak_priode',
        'note',
        'by_user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function byUser()
    {
        return $this->belongsTo(User::class, 'by_user_id');
    }

    public function jenis_guru()
    {
        return $this->belongsTo(JenisGuru::class);
    }
    public function pakUnsur()
    {
        return $this->hasMany(PakUnsur::class, 'pak_id');
    }

}
