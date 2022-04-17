@extends('layouts.admin.main') 

@section('container')

<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Data Buku
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Data Buku
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
                        <a href="{{ route('books.create') }}"><button class="btn btn-primary">
                            <i class="fa fa-plus"> </i> Tambah Buku</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br/>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table" width="100%">
                                <thead>
                                    <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">ISBN</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Penerbit</th>
                                    <th class="text-center">Tahun</th>
                                    <th class="text-center">Stok</th>
                                    <th class="text-center">Tanggal Masuk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variable_buku as $buku) 
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $buku->isbn }}</td>
                                    <td>{{ $buku->judul_buku }}</td>
                                    <td>{{ $buku->nama_penerbit }}</td>
                                    <td>{{ $buku->tahun_terbit }}</td>
                                    <td>{{ $buku->jumlah_buku }}</td>
                                    <td>{{ $buku->created_at }}</td>
                                    {{-- EDIT --}}
                                    <td class="" style="width: 0%">                                               
                                        <a href="{{ route('books.edit', $buku->id) }}">
                                            <button class="btn btn-success"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                                        </a>
                                    </td> 
                                    {{-- EDIT --}}
                                    
                                    {{-- SHOW --}}
                                    <td class="" style="width: 0%">                                               
                                        <a href="{{ route('books.show', $buku->id) }}">
                                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i>&nbsp;Show</button>
                                        </a>
                                    </td> 
                                    {{-- SHOW --}}

                                    {{-- Delete --}}
                                    <td class="" style="width: 0%">                                               
                                        <form action="{{ route('books.destroy', $buku->id) }}" class="d-inline" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus ?')">
                                                <i class="fa fa-trash"></i>&nbsp;Delete
                                            </button>                                           
                                        </form>
                                    </td>
                                    {{-- Delete --}}
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

