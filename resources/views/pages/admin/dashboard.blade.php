@extends('layouts.admin.main') 

@section('container')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard <small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4>Anggota</h4>

                            <p>{{ $total_user }}</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <a href="user" class="small-box-footer"
                            >More info <i class="fa fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!--small box-->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h4>Jenis Buku</h4>

                            <p>{{ $total_jenis_buku }}</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="data" class="small-box-footer"
                            >More info <i class="fa fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h4>Isi</h4>

                            <p><< 10 >></p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <a href="transaksi" class="small-box-footer"
                            >More info <i class="fa fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h4>Di Kembalikan</h4>

                            <p><< 10 >></p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list"></i>
                        </div>
                        <a href="transaksi/kembali" class="small-box-footer"
                            >More info <i class="fa fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
