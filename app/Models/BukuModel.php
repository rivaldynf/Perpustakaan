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
// use App\Http\Request\Admin\AdminKategoriRequest;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $table = 'books';

    // BWA STORE
    protected $fillable = [
        'user_id','book_id','category_id','rak_id','slug','isbn','judul_buku','sampul_buku',
        'lampiran_buku','nama_pengarang','nama_penerbit','tahun_terbit','isi_buku','jumlah_buku'
    ];

    // BWA STORE
    protected $hidden = [

    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class);
    }
    
    public function rak()
    {
        return $this->belongsTo(RakModel::class);
    }
    
    public function user()
    {
        return $this->hasOne(User::class);
    }



    // Laravel Document : https://laravel.com/docs/8.x/routing#route-model-binding
    public function getRouteKeyName()
    {
        return 'slug';
        // return 'id';
    }

    // https://github.com/cviebrock/eloquent-sluggable
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_buku'
            ]
        ];
    }


    

}
