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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penerima')->references('id')->on('users');
            $table->foreignId('id_pengirim')->references('id')->on('users');
            $table->char('judul_pesan', 50);
            $table->text('isi_pesan');
            $table->enum('status', ['terkirim', 'terbaca']);
            $table->dateTime('tanggal_kirim');
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
        Schema::dropIfExists('pesans');
    }
};
