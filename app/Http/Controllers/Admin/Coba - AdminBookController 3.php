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
use App\Http\Requests\Admin\AdminBukuRequest;
// Request

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class AdminBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.buku', [
            'title' => 'Halaman Buku',
            'variable_buku' => BukuModel::where('user_id', auth()->user()->id)->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create.create-buku', [
            'title' => 'Halaman Tambah Buku',
            'variable_kategori' => KategoriModel::all(),
            'variable_rak' => RakModel::all(),
            'variable_buku' => BukuModel::all()
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminBukuRequest $request)
    {
        // BWA STORE
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_buku);
        $data['sampul_buku'] = $request->file('sampul_buku')->store('assets/gallery/book', 'public'); // folder assets/book
        $data['user_id'] = auth()->user()->id;
        BukuModel::create($data);
        return redirect()->route('books.index')->with('success', 'Buku has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        // return 'Ini Halaman Dashboard Buku'; // test
        $buku = BukuModel::findOrFail($slug);
        return view('pages.admin.edit.edit-buku', [
            
            'buku' => $buku,
            'title' => 'Edit Buku',
            'variable_kategori' => KategoriModel::all(),
            'variable_rak' => RakModel::all(),
            'variable_buku' => BukuModel::all(),
            
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminBukuRequest $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
