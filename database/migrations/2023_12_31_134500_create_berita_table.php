<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id');
            $table->string('judul');
            $table->string('sampul')->nullable(); // Kolom untuk menyimpan path/nama file gambar
            $table->string('slug');
            $table->string('keterangan');
            $table->text('isi');
            $table->unsignedBigInteger('user_id'); // Kolom untuk menyimpan ID pengguna yang membuat berita
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori_berita');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
