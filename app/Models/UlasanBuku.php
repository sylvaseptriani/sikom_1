<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanBuku extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUM ID YANG

    //RELASI DARI MODEL BUKU KE ULASAN BUKU
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //RELASI DARI MODEL BUKU KE ULASAN BUKU 
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
