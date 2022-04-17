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
                            <form action="{{ route('books.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
    
                                    {{-- Col-sm-6 --}}
                                    <div class="col-sm-6">
    
                                        {{-- Kategori --}}
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select class="form-control select2" name="category_id">
                                                <option disabled selected value> -- Pilih Kategori -- </option>
                                                @foreach ($variable_kategori as $category)
                                                    @if (old('category_id', $buku->category_id) == $category->id )
                                                        <option value="{{ $category->id }}" selected>
                                                            {{ $category->category_name }}
                                                        </option> 
                                                    @else
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->category_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
    
                                        {{-- Rak / Lokasi --}}
                                        <div class="form-group">
                                            <label for="">Rak / Lokasi</label>
                                            <select class="form-control select2" required="required" name="rak_id">
                                                <option disabled selected value=""> -- Pilih Rak / Lokasi -- </option>
                                                @foreach ($variable_rak as $rak)
                                                    @if (old('rak_id', $buku->rak_id) == $rak->id )
                                                        <option value="{{ $rak->id }}" selected>
                                                            {{ $rak->rak_name }}
                                                        </option> 
                                                    @else
                                                        <option value="{{ $rak->id }}">
                                                            {{ $rak->rak_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        {{-- ISBN --}}
                                        <div class="form-group">
                                            <label for="">ISBN</label>
                                            <input type="text" class="form-control" id="isbn" name="isbn" 
                                            value="{{ old('isbn', $buku->isbn) }}" >
                                            {{-- placeholder="Contoh ISBN : 978-602-8123-35-8" --}}
                                        </div>
                                        
                                        {{-- book id --}}
                                        <div class="form-group">
                                            <label for="">Book ID</label>
                                            <input type="text" class="form-control" id="book_id" name="book_id" 
                                            value="{{ old('book_id', $buku->book_id) }}" readonly>
                                            {{-- placeholder="Contoh ISBN : 978-602-8123-35-8" --}}
                                        </div>
    
                                        {{-- Judul Buku --}}
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" 
                                            value="{{ old('judul_buku', $buku->judul_buku) }}">
                                        </div>
    
                                        {{-- Nama Pengarang --}}
                                        <div class="form-group">
                                            <label>Nama Pengarang</label>
                                            <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" 
                                            value="{{ old('nama_pengarang', $buku->nama_pengarang) }}">
                                        </div>
    
                                        {{-- Penerbit --}}
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" 
                                            value="{{ old('nama_penerbit', $buku->nama_penerbit) }}">
                                        </div>
    
                                        {{-- Tahun Buku --}}
                                        <div class="form-group">
                                            <label>Tahun Buku</label>
                                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" 
                                            value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                                        </div>

                                        {{-- Jumlah Buku --}}
                                        <div class="form-group">
                                            <label for="">Jumlah Buku</label>
                                            <input type="text" class="form-control" id="jumlah_buku" name="jumlah_buku" 
                                            value="{{ old('jumlah_buku', $buku->jumlah_buku) }}">
                                        </div>
                                    </div>
                                    {{-- Col-sm-6 --}}
                                    
                                    {{-- Col-sm-6 --}}
                                    <div class="col-sm-6">
    
                                        {{-- Sampul --}}
                                        {{-- <input type="hidden" class="form-control" id="oldImage" name="oldImage" 
                                        value="{{ old('sampul_buku', $buku->sampul_buku) }}"> --}}
                                        <div class="form-group">
                                            <label for="sampul_buku">Sampul Buku</label><br>
                                            <input type="hidden" class="" id="oldImage" name="oldImage" value="{{ $buku->sampul_buku }}">
                                            @if ($buku->sampul_buku)
                                                <img src="{{ asset('storage/' . $buku->sampul_buku) }}" class="img-preview img-fluid mb-6 col-sm-8 d-block">
                                            @else
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                            @endif
                                            <br><br><br><br><br><br>
                                            <br><br><br><br>

                                            <input class="form-control @error('sampul_buku') is-invalid
                                            @enderror" type="file" id="sampul_buku" name="sampul_buku" onchange="previewImage()">
                                            @error('sampul_buku')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
    
                                        {{-- Lampiran Buku --}}
                                        <div class="form-group">
                                            <label>Lampiran Buku <small style="color:green">(pdf) * opsional</small></label>
                                            <a href="/admin/books/{{ $buku->id }}/show_pdf" class="" a target="_blank">Show 2</a>
                                            <input type="file" class="form-control" id="lampiran_buku" name="lampiran_buku" 
                                            value="{{ old('lampiran_buku', $buku->lampiran_buku) }}" placeholder="lampiran_buku">
                                        </div>
                                                                                
                                        {{-- Keterangan --}}
                                        <div class="form-group">
                                            <label>Keterangan Lainnya</label>
                                            <textarea class="editor form-control" name="isi_buku" id="summernotehal" 
                                            value="" style="height:120px">{{ old('isi_buku', $buku->isi_buku) }}</textarea>
                                        </div>
    
                                    </div>
                                    {{-- Col-sm-6 --}}
    
                                </div>
    
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                    <a href="/admin/books" class="btn btn-danger btn-md">Kembali</a>
                                </div>
                                    
                                </form>
                            {{-- Form --}}
                            
    
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

{{-- Slug --}}
<script>
    const judul_buku = document.querySelector('#judul_buku');
    const slug = document.querySelector('#slug');

    judul_buku.addEventListener('change', function()
    {
        fetch('/books/checkSlug/checkSlug?judul_buku=' + judul_buku.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)

    });
</script>
{{-- Slug --}}

{{-- Preview Image --}}
<script>
    function previewImage()
    {
        const sampul_buku = document.querySelector('#sampul_buku');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(sampul_buku.files[0]);

        oFReader.onload = function(oFREvent)
        {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
{{-- Preview Image --}}

@endsection
