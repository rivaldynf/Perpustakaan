<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminPeminjamanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'book_id'=> 'required',
            'user_id'=> 'required',
            'status'=> 'required',
            'tanggal_peminjaman'=> 'required|stirng',
            'lama_peminjaman'=> 'required|string',
            'tanggal_pengembalian'=> 'required|stirng',
        ];
    }
}
