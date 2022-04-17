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
use App\Http\Requests\Admin\AdminKategoriRequest;
// Request

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.kategori', [
            'title' => 'Halaman Kategori',
            'variable_kategori' => KategoriModel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create.create-kategori', [
            'title' => 'Tambah Kategori',
            'variable_kategori' => KategoriModel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminKategoriRequest $request)
    {
        // BWA STORE
        $data = $request->all();
        $data['slug'] = Str::slug($request->category_name);
        $data['user_id'] = auth()->user()->id;
        KategoriModel::create($data);
        return redirect()->route('category.index')->with('success', 'Kategori has been added!');
        
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
    public function edit($id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminKategoriRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->category_name);
        $data['user_id'] = auth()->user()->id;

        $category = KategoriModel::findOrFail($id);
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Kategori has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = KategoriModel::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('destroy', 'Kategori has been deleted!');
    }
}
