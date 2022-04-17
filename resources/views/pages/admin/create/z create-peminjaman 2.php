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
                                                    <input type="text" class="form-control" required autocomplete="off" name="user_id" id="search-box" placeholder="Contoh ID Anggota : AG001" type="text" value="">
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
                                                    <input type="text" class="form-control" autocomplete="off" name="book_id" id="buku-search" placeholder="Contoh ID Buku : BK001" type="text" value="">
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

{{--------------------------------------------------------------------------- PENANDA ---------------------------------------------------------------------------}}

{{-- MODAL ID ANGGOTA --}}
<div class="modal fade" id="TableAnggota">
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Add Anggota</h4>
            </div>

            <div id="modal_body" class="modal-body fileSelection1">
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenkel</th>
                            <th>Telepon</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($variable_user as $anggota)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggota->username }}</td>
                            <td>{{ $anggota->jenis_kelamin }}</td>
                            <td>{{ $anggota->telp }}</td>
                            <td>{{ $anggota->level }}</td>
                            <td class="" style="width: 0%">                                               
                                <button class="btn btn-primary" id="Select_File1" data_id="{{ $anggota->user_id }}"> {{-- data id --}}
                                    <i class="fa fa-check"> </i> Pilih
                                </button>
                            </td>
                        </tr>
                        @endforeach
                            
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
{{-- MODAL ID ANGGOTA --}}

{{-- SCRIPT DATA ANGGOTA --}}
<script>
    $(".fileSelection1 #Select_File1").click(function (e) {
        document.getElementsByName('user_id')[0].value = $(this).attr("data_id");
		$('#TableAnggota').modal('hide');
		$.ajax({
            type: "POST",
            url: "",
            data: 'kode_anggota='+$(this).attr("data_id"),
            beforeSend: function() {
                $("#result").html("");
				$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
            },

            success: function(html) {
				$("#result").html(html);
				$("#result_tunggu").html('');
			}
        });
    });
</script>

<script>
    $(document).ready(function() {
		$("#search-box").keyup(function() {
			$.ajax({
                type: "POST",
				url: "",
				data:'kode_anggota='+$(this).val(),
				beforeSend: function() {
					$("#result").html("");
					$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
				},

				success: function(html) {
					$("#result").html(html);
					$("#result_tunggu").html('');
				}
            });
        });
    });
</script>
{{-- SCRIPT DATA ANGGOTA --}}

{{-- Modal Kode Buku --}}
<div class="modal fade" id="TableBuku">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Add Buku</h4>
            </div>

            <!--  -->
            <div id="modal_body" class="modal-body fileSelection1">
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
                        @foreach ($variable_buku as $buku)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $buku->isbn }}</td>
                            <td>{{ $buku->judul_buku }}</td>
                            <td>{{ $buku->nama_pengarang }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>{{ $buku->jumlah_buku }}</td>
                            <td>{{ $buku->created_at }}</td>
                            <td style="width:17%">
                                <button class="btn btn-primary" id="Select_File2" data_id="{{ $buku['book_id'] }}"> {{-- data id --}}
                                    <i class="fa fa-check"> </i> Pilih
                                </button>
                                <a href="" target="_blank">
                                    <button class="btn btn-success">
                                        <i class="fa fa-sign-in"></i> Detail
                                    </button>
                                </a>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 
{{-- Modal Kode Buku --}}

{{--------------------------------------------------------------------------- PENANDA ---------------------------------------------------------------------------}}

{{-- SCRIPT DATA BUKU --}}
<script>
	$(".fileSelection1 #Select_File2").click(function (e) {
		document.getElementsByName('book_id')[0].value = $(this).attr("data_id");
        $('#TableBuku').modal('hide');
		$.ajax({
            type: "POST",
            url: "", // kosong
			data:'kode_buku='+$(this).attr("data_id"),
			beforeSend: function() {
				$("#result_buku").html("");
				$("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
            },

			success: function(html) {
                $("#result_buku").load("");
				$("#result_tunggu_buku").html('');
            }
        });
    });
</script>

<script>
	$(document).ready(function() {
		$("#buku-search").keyup(function() {
			$.ajax({
				type: "POST",
				url: "", //url
				data:'kode_buku='+$(this).val(),
				beforeSend: function() {
					$("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
				},

				success: function(html) {
					$("#result_buku").load("");
					$("#result_tunggu_buku").html('');
				}

			});
		});
	});
</script>
{{-- SCRIPT DATA BUKU --}}

{{--------------------------------------------------------------------------- PENANDA ---------------------------------------------------------------------------}}

@endsection

