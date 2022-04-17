@section('modal-peminjaman')
{{-- Modal ID ANGGOTA --}}
<div class="modal fade" id="TableAnggota">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Add Anggota</h4>
            </div>
            <div class="modal-body fileSelection1" id="modal_body">
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
                                <button class="btn btn-primary" id="Select_File1" data_id="">
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
{{-- Modal ID ANGGOTA --}}

{{-- --------------------------------------- Penanda --------------------------------------- --}}

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

            
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 
{{-- Modal Kode Buku --}}
@endsection