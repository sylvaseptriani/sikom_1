<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUM ID YANG

    //RELASI DARI MODEL USER KE KOLEKSI PRIBADI
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
    //RELASI DARI MODEL BUKU KATEGORI PRIBADI
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
