<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// Model
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
use App\Models\User;
// Model

// Request
use App\Http\Requests\Admin\UserRequest;
// Request

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class AdminAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.anggota', [
            'title' => 'Halaman anggota',
            'variable_user' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create.create-anggota', [
            'title' => 'Tambah Anggota',
            'variable_anggota' => AnggotaModel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaModel $anggotaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaModel $anggotaModel)
    {
        $category = KategoriModel::findOrFail($id);

        return view('pages.admin.edit.edit-kategori', [
            'category' => $category,
            'title' => 'Halaman Kategori',
            'variable_kategori' => KategoriModel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnggotaModel $anggotaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaModel  $anggotaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnggotaModel $anggotaModel)
    {
        //
    }
}
