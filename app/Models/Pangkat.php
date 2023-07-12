<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tendik;


class Pangkat extends Model
{
    use HasFactory;
    protected $table = 'pangkat';
    protected $fillable = ['title'];

    public function tendik()
    {
        return $this->hasMany(Tendik::class);
    }
}
