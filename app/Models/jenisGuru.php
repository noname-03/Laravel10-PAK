<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tendik;
use App\Models\Pak;

class jenisGuru extends Model
{
    use HasFactory;

    protected $table = 'jenis_guru';
    protected $fillable = ['title'];

    public function pak()
    {
        return $this->hasMany(Pak::class);
    }

    public function tendik()
    {
        return $this->hasMany(Tendik::class);
    }
}