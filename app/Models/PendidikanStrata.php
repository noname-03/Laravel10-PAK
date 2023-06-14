<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanStrata extends Model
{
    use HasFactory;

    protected $table = 'pendidikan_strata';

    protected $fillable = [
        'title',
    ];

    public function tendik()
    {
        return $this->hasMany(Tendik::class);
    }
}