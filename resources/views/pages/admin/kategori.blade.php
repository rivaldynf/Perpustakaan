@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Data Kategori
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Data Kategori
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
                        <a href="{{ route('category.create') }}"><button class="btn btn-primary">
                            <i class="fa fa-plus"> </i> Tambah Kategori</button></a>
                    </div>
                    
                    <div class="box-body">
                    <br/>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">No</th>
                                    <th class="text-center">Nama Kategori</th>
                                    <th class="text-center" style="width:   ;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variable_kategori as $category) 
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>                                    
                                    {{-- EDIT --}}
                                    <td class="" style="width: 0%">                                               
                                        <a href="{{ route('category.edit', $category->id) }}">
                                            <button class="btn btn-success"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                                        </a>
                                    </td> 
                                    {{-- EDIT --}}

                                    {{-- Delete --}}
                                    <td class="" style="width: 0%">                                               
                                        <form action="{{ route('category.destroy', $category->id) }}" class="d-inline" method="post">
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
