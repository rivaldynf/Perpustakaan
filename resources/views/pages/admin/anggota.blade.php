@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Data Anggota
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Data Anggota
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
                        <a href="/admin/anggota/create"><button class="btn btn-primary">
                            <i class="fa fa-plus"> </i> Tambah Anggota</button></a>
                    </div>
                    <!-- /.box-header -->
                    

                    <div class="box-body">
                    <br/>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama </th>
                                    <th class="text-center">Username </th>
                                    <th class="text-center">Jenis Kelamin </th>
                                    <th class="text-center">Telp </th>
                                    <th class="text-center">Level </th>
                                    <th class="text-center" >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variable_user as $anggota) 

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $anggota->name }}</td>                                   
                                    <td>{{ $anggota->username }}</td>                                   
                                    <td>{{ $anggota->jenis_kelamin }}</td>                                   
                                    <td>{{ $anggota->telp }}</td>                                   
                                    <td>{{ $anggota->level }}</td>                                   
                                    <td style="width:20%;">
                                        <a href="/admin/anggota/edit/{{ $anggota->id }}">
                                            <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="/admin/anggota/destroy/{{ $anggota->id }}" onclick="return confirm('Anda yakin user akan dihapus ?');">
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                        <a href="" target="_blank">
                                            <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                        </a>
                                    </td>
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
