<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PakUnsur extends Model
{
    use HasFactory;

    protected $table = 'pak_unsur';

    protected $fillable = [
        'pak_id',
        'unsur_id',
        'nilai',
        'dokumen',
        'is_verified',
        'title',
        'tahun',
    ];

    // relationship ke unsur
    public function unsur()
    {
        return $this->belongsTo(Unsur::class, 'unsur_id');
    }

    // relationship ke pak
    public function pak()
    {
        return $this->belongsTo(Pak::class, 'pak_id');
    }

}