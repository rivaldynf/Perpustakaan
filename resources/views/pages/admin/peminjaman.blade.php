@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Data Peminjaman
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Data Peminjaman
        </li>
    </ol>
    </section>

    <section class="content">
        {{-- Pesan Sukses --}}
        @if (session()->has('success'))
        <div id="notifikasi">
            <div class="alert alert-success">
                <p> {{ session('success') }} !</p>
            </div>
        </div>
        @endif
        {{-- Pesan Sukses --}}
        
        {{-- Pesan Gagal --}}
        @if (session()->has('destroy'))
        <div id="notifikasi">
            <div class="alert alert-danger">
                <p> {{ session('destroy') }} !</p>
            </div>
        </div>
        @endif
        {{-- Pesan Gagal --}}

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    
                    <div class="box-header with-border">
                        <a href="/admin/peminjaman/create"><button class="btn btn-primary">
                            <i class="fa fa-plus"> </i> Tambah Peminjaman</button></a>
                    </div>
                    <!-- /.box-header -->
                    

                    <div class="box-body">
                    <br/>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">No</th>
                                    <th class="text-center">No Pinjam</th>
                                    <th class="text-center">ID Anggota</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Peminjaman</th>
                                    <th class="text-center">Pengembalian</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Denda</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variable_peminjaman as $peminjaman) 
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


</div>
@endsection
