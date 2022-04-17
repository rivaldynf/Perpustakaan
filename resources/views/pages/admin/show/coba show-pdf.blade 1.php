<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <iframe src="/storage/assets/files/book/{{ $buku->lampiran_buku }}" frameborder="0"></iframe>
    <iframe src="/public/storage/assets/files/book/{{ $buku->sampul_buku }}" frameborder="0"></iframe>
    <iframe src="/assets/{{ $buku->lampiran_buku }}" frameborder="0"></iframe>
    <br>
    {{ $buku->judul_buku }}
    {{ $buku->nama_pengarang }}
    {{ $buku->book_id }}
    {{-- <iframe src="assets/files/book/{{ $buku->lampiran_buku }}/show_pdf" frameborder="0"></iframe> --}}
</body>
</html>