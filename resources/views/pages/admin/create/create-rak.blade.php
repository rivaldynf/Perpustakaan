@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Tambah Rak
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href=""><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Tambah Rak
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
                        <form action="{{ route('raks.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label for="">Nama Rak</label>
                                        <input type="text" class="form-control" id="rak_name" name="rak_name" value="{{ old('rak_name') }}">
                                    </div>
                                </div>
                                {{-- Col-sm-6 --}}

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
@endsection
