@extends('layouts.admin.main') 

@section('container')
    <div class="content-wrapper">
        <section class="content-header">
        <h1>
            <i class="fa fa-book" style="color:green"></i>  Data Detail Buku
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href=""><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file-text"></i>&nbsp; Data Buku
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
                            <form action="{{ route('raks.update',$rak->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
    
                                    {{-- Col-sm-6 --}}
                                    <div class="col-lg-10">
                                    
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <input type="text" class="form-control" id="rak_name" name="rak_name" value="{{ old('rak_name', $rak->rak_name) }}">
                                    </div>

                                </div>
                                {{-- Col-sm-6 --}}
    
                                </div>
    
                                <div class="pull-left">
                                    <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                    <a href="/admin/rak" class="btn btn-danger btn-md">Kembali</a>
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
