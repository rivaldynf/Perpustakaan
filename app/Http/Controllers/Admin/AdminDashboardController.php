<?php

namespace App\Http\Controllers\Admin;

use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $total_user = User::count();
        $total_buku = BukuModel::count();
        $total_jenis_buku = KategoriModel::count();

        return view('pages.admin.dashboard', [
            "title" => "Dashboard",
            'total_user' => $total_user,
            'total_buku' => $total_buku,
            'total_jenis_buku' => $total_jenis_buku
        ]);
    }
}

