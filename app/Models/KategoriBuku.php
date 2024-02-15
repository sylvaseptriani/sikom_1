<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUM ID BUKU YANG BOLEH DI ISI

    //RELASI DARI MODEL BUKU KATEGORI BUKU
    public function kategoribuku()
    {
        return $this->belongsTo(KategoriBuku::class);
    }

}