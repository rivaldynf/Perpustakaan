@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Tambah Peminjaman
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href=""><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-plus"></i>&nbsp; Tambah Peminjaman
        </li>
    </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border"></div>
                    <div class="box-body">

                        {{-- Form --}}
                        {{-- <form action="/admin/books" method="POST" enctype="multipart/form-data"> --}}
                        <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="col-sm-5">
                                    <table class="table table-striped">
                                        <tr style="background:yellowgreen">
                                            <td colspan="3">Data Transaksi</td>
                                        </tr>
                                        <tr>
                                            <td>No Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="peminjaman_id" value="{{ old('peminjaman_id') }}" readonly class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <input type="date" value="{{ date('Y-m-d') }}" name="tanggal_peminjaman" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID Anggota</td>
                                            <td>:</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" required autocomplete="off" name="anggota_id" id="search-box" placeholder="Contoh ID Anggota : AG001" type="text" value="">
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" data-target="#TableAnggota" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Biodata</td>
                                            <td>:</td>
                                            <td>
                                                <div id="result_tunggu"> <p style="color:red">* Belum Ada Hasil</p></div>
                                                <div id="result"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lama Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" required placeholder="Lama Pinjam Contoh : 2 Hari (2)" name="lama" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-sm-7">
                                    <table class="table table-striped">
                                        <tr style="background:yellowgreen">
                                            <td colspan="3">Pinjam Buku</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Buku</td>
                                            <td>:</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" autocomplete="off" name="buku_id" id="buku-search" placeholder="Contoh ID Buku : BK001" type="text" value="">
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" data-target="#TableBuku" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Data Buku</td>
                                            <td>:</td>
                                            <td>
                                                <div id="result_tunggu_buku"> <p style="color:red">* Belum Ada Hasil</p></div>
                                                <div id="result_buku"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                <a href="/admin/peminjaman" class="btn btn-danger btn-md">Kembali</a>
                            </div>
                                
                        </form>
                        {{-- Form --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>

@endsection

@yield('modal-peminjaman')

{{--  --}}
{{-- <div class="modal fade" id="TableBuku">
    <div class="modal-dialog" style="width:80%">
        <div class="modal-content">
            <div class="modal-header">
                <button tabindex="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <h4 class="modal-title">Add Buku</h4>
            </div>

            <div class="modal-body" class="modal-body ModalBuku">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Penerbit</th>
                            <th>Tahun Buku</th>
                            <th>Stok Buku</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="width:17%">
                                <button class="btn btn-primary" id="Select_File2" data_id="">
                                    <i class="fa fa-check"> </i> Pilih
                                </button>
                                <a href="" target="_blank">
                                    <button class="btn btn-success"><i class="fa fa-sign-in"></i> Detail</button></a>    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div> --}}
{{--  --}}

