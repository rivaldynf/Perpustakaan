<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <br />
                <img
                    src=""
                    alt="#"
                    c
                    lass="user-image"
                    style="border: 2px solid #fff; height: auto; width: 100%"
                />
                <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                <i class="fa fa-user fa-4x" style="color: #fff"></i>
            </div>
            <div class="pull-left info" style="margin-top: 5px">
                <p>{{ auth()->user()->name }}</p>
                <p>Petugas</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <br />
            <br />
            <br />
            <br />
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            {{--  --}}
            <li class="nav-item {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                <a href="{{ route('admin-dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            {{--  --}}

            {{--  --}}
            <li class="nav-item {{ (request()->is('admin/anggota*')) ? 'active' : '' }}">
                <a href="{{ route('anggota.index') }}">
                    <i class="fa fa-profile"></i> <span>Anggota</span>
                </a>
            </li>
            
            {{--  --}}
            <li class="nav-item {{ (request()->is('admin/books*')) ? 'active' : '' }}">
                <a href="{{ route('books.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Buku</span>
                </a>
            </li>
            
            <li class="nav-item {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Kategori</span>
                </a>
            </li>
            
            <li class="nav-item {{ (request()->is('admin/raks*')) ? 'active' : '' }}">
                <a href="{{ route('raks.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Rak</span>
                </a>
            </li>
            
            <li class="nav-item {{ (request()->is('admin/peminjaman*')) ? 'active' : '' }}">
                <a href="{{ route('peminjaman.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Peminjaman</span>
                </a>
            </li>
            
            <li class="nav-item {{ (request()->is('admin/pengembalian*')) ? 'active' : '' }}">
                <a href="{{ route('pengembalian.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Pengembalian</span>
                </a>
            </li>
            
            {{--  --}}
            {{-- <li class="nav-item{{ (request()->is('admin/books*')) ? 'active' : '' }}">
                <a href="{{ route('admin-dashboard') }}"> 
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </li> --}}

            {{--  --}}
            {{-- <li class="nav-item{{ (request()->is('admin/books*')) ? 'active' : '' }}">
                <a href="{{ route('books.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li> --}}
            {{--  --}}
            

            
            
            

                

                
        </ul>
        <div class="clearfix"></div>
        <br />
        <br />
    </section>
</aside>

