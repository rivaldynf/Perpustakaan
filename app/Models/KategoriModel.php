<?php

namespace App\Models;

// MODEL
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
use App\Models\User;
// MODEL

// use App\Http\Request\Admin\AdminKategoriRequest;
use App\Http\Requests\Admin\AdminKategoriRequest;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    // protected $guarded = ['id']; // WEB UNPAS
    protected $table = 'categories';

    // BWA STORE
    protected $fillable = [
        'category_name', 'slug'
    ]; 

    // BWA STORE
    protected $hidden = [

    ];

    // public function buku()
    // {
    //     return $this->hasMany(BukuModel::class);
    // }
}
