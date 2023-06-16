<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unsur extends Model
{
    use HasFactory;

    protected $table = 'unsur';

    protected $fillable = [
        'parent_id',
        'nilai',
        'title',
        'year',
    ];

    public function parent()
    {
        return $this->belongsTo(Unsur::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Unsur::class, 'parent_id');
    }
    public function pakUnsur()
    {
        return $this->hasMany(PakUnsur::class, 'unsur_id');
    }

}