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

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        $data['sampul_buku'] = $request->file('sampul_buku')->store('assets/gallery'); // folder assets/gallery
        $data['lampiran_buku'] = $request->file('lampiran_buku')->store('assets/files'); // folder assets/book
        $data['user_id'] = auth()->user()->id;
        
        $config = ['table' => 'books', 'field' => 'book_id', 'length' => 6, 'prefix' => 'B-' ];
        $book_id = IdGenerator::generate($config);            
        $data['book_id'] = $book_id;

        // if ($request->file('sampul_buku')) {
        //     $data['sampul_buku'] = $request->file('sampul_buku')->store('assets');
        // }

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
    public function edit($id)
    {
        // return 'Ini Halaman Dashboard Buku'; // test
        $buku = BukuModel::findOrFail($id);

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
        // BWA STORE
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_buku);
        $data['lampiran_buku'] = $request->file('lampiran_buku')->store('assets/files', 'public'); // folder assets/book
        $data['user_id'] = auth()->user()->id;
        
        // Validasi Image untuk menentukan misal gambar kosong tetap bisa di upload
        if ($request->file('sampul_buku')) {
            // Jika gambar lama ada maka dihapus
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['sampul_buku'] = $request->file('sampul_buku')->store('assets/gallery', 'public');
        }
        
        // Validasi Image untuk menentukan misal gambar kosong tetap bisa di upload
        // if ($request->file('lampiran_buku')) {
        //     // Jika gambar lama ada maka dihapus
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $data['lampiran_buku'] = $request->file('lampiran_buku')->store('assets/files', 'public');
        // }

        $buku = BukuModel::findOrFail($id);
        $buku->update($data);
        return redirect()->route('books.index')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BukuModel $buku, $id)
    {
        $buku = BukuModel::findOrFail($id); // berhasil
        $buku->delete(); // berhasil

        // if ($buku->sampul_buku) {
        //     Storage::delete($buku->sampul_buku);
        // }
        // BukuModel::destroy($buku->id);



        return redirect()->route('books.index')->with('destroy', 'Buku has been deleted!');
    }

    // Slug
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(BukuModel::class, 'slug', $request->judul_buku);
        return response()->json(['slug' => $slug]);
    }

    // public function show_pdf(BukuModel $request, $id)
    public function show_pdf($id)
    {
        // return 'Ini Halaman Dashboard Buku'; // test
        $buku = BukuModel::find($id);
        return view('pages.admin.show.show-pdf', compact('buku'));
        
    }
    
    public function donwload(BukuModel $request, $id)
    // public function show_pdf($id)
    {
        // return 'Ini Halaman Dashboard Buku'; // test
        $buku = BukuModel::find($id);
        return view('pages.admin.show.show-pdf', compact('buku'));
        
    }




}
