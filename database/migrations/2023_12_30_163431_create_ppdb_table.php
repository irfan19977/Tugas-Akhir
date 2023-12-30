<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Blueprstring;
use Illuminate\Support\Facades\Schema;

class CreatePpdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID pengguna terkait (jika ada)
            $table->string('nama');
            $table->string('jkel');
            $table->string('tmp_lh');
            $table->date('tgl_lh');
            $table->string('agama');
            $table->string('alamat');
            $table->string('sekolah');
            $table->string('no_wa');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('jlh_sdr');
            $table->string('sakit');
            $table->string('hobi');
            $table->string('organisasi');
            $table->string('jrs_1');
            $table->string('alasan_1');
            $table->string('jrs_cd');
            $table->string('alasan_cd');
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
        Schema::dropIfExists('ppdb');
    }
}
