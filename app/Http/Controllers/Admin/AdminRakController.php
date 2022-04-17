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

class AdminRakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rak', [
            'title' => 'Halaman rak',
            'variable_rak' => RakModel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create.create-rak', [
            'title' => 'Tambah Rak',
            'variable_rak' => RakModel::all(),
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
        // BWA STORE
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        RakModel::create($data);
        return redirect()->route('raks.index')->with('success', 'Kategori has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RakModel  $rakModel
     * @return \Illuminate\Http\Response
     */
    public function show(RakModel $rakModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RakModel  $rakModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rak = RakModel::findOrFail($id);

        return view('pages.admin.edit.edit-rak', [
            'rak' => $rak,
            'title' => 'Halaman Rak',
            'variable_rak' => RakModel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RakModel  $rakModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RakModel $rakModel, $id)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $rak = RakModel::findOrFail($id);
        $rak->update($data);
        return redirect()->route('raks.index')->with('success', 'Rak has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RakModel  $rakModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RakModel $rakModel, $id)
    {
        $rak = RakModel::findOrFail($id);
        $rak->delete();
        return redirect()->route('raks.index')->with('destroy', 'Kategori has been deleted!');
    }
}
