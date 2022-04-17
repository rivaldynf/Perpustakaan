<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('admin')->only(['store', 'create', 'show', 'update', 'edit']);
    }

    public function index()
    {
        // return 'Ini Halaman Dashboard Buku'; // test

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
            'title' => 'Tambah Buku',
            'variable_kategori' => KategoriModel::all(),
            'variable_rak' => RakModel::all(),
            'variable_buku' => BukuModel::all(),
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
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function show(BukuModel $bukuModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BukuModel $buku, $slug)
    {
        // return 'Ini Halaman Edit Buku'; // test
        // $buku = BukuModel::findOrFail($slug);
        return view('pages.admin.edit.edit-buku', [
            'buku' => $buku,
            'title' => 'Edit Buku',
            'variable_kategori' => KategoriModel::all(),
            'variable_rak' => RakModel::all(),
            'variable_buku' => BukuModel::all(),            
        ],
        compact('buku', $buku->slug)
    );

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BukuModel $bukuModel)
    {
        $rules = [
            'judul_buku' => 'required|max:255',
            'slug' => 'required|unique:posts',
            
            
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        

        $validatedData['user_id'] = auth()->user()->id;

        // 
        BukuModel::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuModel  $bukuModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BukuModel $bukuModel)
    {
        //
    }
}
