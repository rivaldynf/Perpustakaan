<?php

namespace App\Models;

// MODEL
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PeminjamanModel;
use App\Models\User;
// MODEL

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $table = 'peminjaman';

    // BWA STORE
    protected $fillable = [
        'status', 'tanggal_peminjaman', 'tanggal_pengembalian' 
    ]; 

    // BWA STORE
    protected $hidden = [

    ];

    // public function buku()
    // {
    //     return $this->hasMany(BukuModel::class);
    // }
}
