<?php

namespace App\Models;

// MODEL
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
use App\Models\User;
// MODEL

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakModel extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $table = 'raks';

    // BWA STORE
    protected $fillable = [
        'rak_name', 
    ]; 

    // BWA STORE
    protected $hidden = [

    ];

    // public function buku()
    // {
    //     return $this->hasMany(BukuModel::class);
    // }
}
