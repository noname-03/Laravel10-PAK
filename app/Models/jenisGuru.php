<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisGuru extends Model
{
    use HasFactory;

    protected $table = 'jenis_guru';
    protected $fillable = ['title'];

    public function pak()
    {
        return $this->hasMany(Pak::class);
    }
}