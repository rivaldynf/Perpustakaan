@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Tambah Anggota
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href=""><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Tambah Anggota
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
                        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                {{-- col-sm-6 --}}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name" required="required" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required="required" placeholder="Contoh : Jakarta">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="required" placeholder="Contoh : 1999-02-12">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required="required" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control" id="level" required="required">
                                            <option value="petugas">Petugas</option>
                                            <option value="admin">Admin</option>
                                            <option value="anggota">Anggota</option>
                                        </select>
                                    </div>

                                    {{-- Level --}}
                                    {{-- <div class="form-group">
                                        <label for="">Level</label>
                                        <select class="form-control select2" required="required" name="level">
                                            <option disabled selected value> -- Pilih Level -- </option>
                                            @foreach ($user as $anggota)
                                                <option value="{{ $country->id }}" 
                                                    @if($country->id == $user->country) selected 
                                                    @endif>{{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>

                                    </div> --}}

                                </div>
                                {{-- Col-sm-6 --}}

                                <div class="col-sm-6">
                                    {{-- <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required="required"> Perempuan --}}
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <br/>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}> Laki-Laki
                                        <br/>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}> Perempuan
                                    </div>

                                    

                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input id="text" class="form-control" id="telp" name="telp" required="required" placeholder="Contoh : 089618173609">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Contoh : admin@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Pas Foto</label>
                                        <input type="file" accept="foto/*" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" required="required"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                <a href="/admin/raks" class="btn btn-danger btn-md">Kembali</a>
                            </div>
                                
                            </form>
                        {{-- Form --}}
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent)
        {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>

@endsection
