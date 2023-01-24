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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anggota')->references('id')->on('users');
            $table->foreignId('id_buku')->references('id')->on('bukus');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian')->nullable();
            $table->enum('kondisi_buku_saat_dipinjam', ['Baik', 'Rusak']);
            $table->enum('kondisi_buku_saat_dikembalikan', ['Baik', 'Rusak'])->nullable();
            $table->integer('denda')->nullable();
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
        Schema::dropIfExists('peminjamen');
    }
};
