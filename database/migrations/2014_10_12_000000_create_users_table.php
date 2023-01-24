<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode_user', 25)->unique()->nullable();
            $table->char('nis', 20)->unique();
            $table->char('fullname', 125);
            $table->char('username', 50);
            $table->char('password', 100);
            $table->char('kelas', 50);
            $table->text('alamat')->nullable();
            $table->enum('verif', ['verified', 'unverified']);
            $table->enum('role', ['user', 'admin']);
            $table->dateTime('join_date');
            $table->dateTime('terakhir_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
