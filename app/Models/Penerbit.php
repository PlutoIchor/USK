<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $fillable= [
        'kode_penerbit',
        'nama_penerbit',
        'verif_penerbit',
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
