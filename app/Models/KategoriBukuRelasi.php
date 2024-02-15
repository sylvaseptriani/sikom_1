<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBukuRelasi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUM ID BUKU YANG BOLEH DI ISI

    //RELASI DARI MODEL USER KE KATEGORI BUKU RELASI
    Public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    //RELASI DARI MODEL BUKU KATEGORI BUKU RELASI
    Public function kategoribuku()
    {
        return $this->belongsTo(KategoriBuku::class);
}
}