<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable= [
        'judul_buku',
        'id_kategori',
        'id_penerbit',
        'pengarang',
        'tahun_terbit',
        'foto',
        'lsbn',
        'j_buku_baik',
        'j_buku_rusak'
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class);
    }
}
