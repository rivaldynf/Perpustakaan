@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        <i class="fa fa-edit" style="color:green"></i>  Tambah Kategori
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href=""><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file-text"></i>&nbsp; Tambah Kategori
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
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                {{-- Col-sm-6 --}}
                                <div class="col-lg-10">
                                    
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name') }}">
                                    </div>

                                </div>
                                {{-- Col-sm-6 --}}

                            </div>

                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                <a href="{{ route('category.index') }}" class="btn btn-danger btn-md">Kembali</a>
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
