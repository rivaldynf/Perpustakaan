@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Data Rak
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Data Rak
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
                        <a href="/admin/raks/create"><button class="btn btn-primary">
                            <i class="fa fa-plus"> </i> Tambah Rak</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <br/>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">No</th>
                                    <th class="text-center">Rak Buku</th>
                                    <th class="text-center" style="width: 5%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variable_rak as $rak) 
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rak->rak_name }}</td>    
                                    <td class="text-center">                                
                                        {{-- EDIT --}}
                                    <td class="" style="width: 0%">                                               
                                        <a href="{{ route('raks.edit', $rak->id) }}">
                                            <button class="btn btn-success"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                                        </a>
                                    </td> 
                                    {{-- EDIT --}}

                                    {{-- Delete --}}
                                    <td class="" style="width: 0%">                                               
                                        <form action="{{ route('raks.destroy', $rak->id) }}" class="d-inline" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus ?')">
                                                <i class="fa fa-trash"></i>&nbsp;Delete
                                            </button>                                           
                                        </form>
                                    </td>
                                    {{-- Delete --}}
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
