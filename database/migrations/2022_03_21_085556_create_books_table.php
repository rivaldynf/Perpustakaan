<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('book_id', 6)->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('rak_id')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('isbn')->unique();
            $table->string('judul_buku')->nullable();
            $table->string('sampul_buku')->nullable(); // gambar 
            $table->string('lampiran_buku')->nullable(); // gambar
            $table->string('nama_pengarang')->nullable();
            $table->string('nama_penerbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->text('isi_buku')->nullable();
            $table->string('jumlah_buku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
