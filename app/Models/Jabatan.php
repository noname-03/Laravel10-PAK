<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tendik;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $fillable = ['title'];

    public function tendik()
    {
        return $this->hasMany(Tendik::class);
    }
}