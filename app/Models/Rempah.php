<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rempah extends Model
{
    protected $fillable = [
        'nama',
        'latin',
        'deskripsi',
        'asal',
        'rasa',
        'manfaat',
        'harga',
        'gambar'
    ];
}