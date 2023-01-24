<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengirim',
        'id_penerima',
        'judul_pesan',
        'isi_pesan',
        'status',
        'tanggal_kirim',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
