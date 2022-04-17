<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminBukuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // false jadi true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'rak_id' => 'required|exists:raks,id',
            // 'book_id' => 'required',
            'isbn' => 'required',
            'judul_buku' => 'required',
            'sampul_buku' => 'image|file',
            // 'lampiran_buku' => 'mimes:pdf|max:2048', // File PDF
            'nama_pengarang' => 'required',
            'nama_penerbit' => 'required',
            'tahun_terbit' => 'required',
            'isi_buku' => 'required',
            'jumlah_buku' => 'required'
        ];
    }
}
