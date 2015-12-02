<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('username')->unique();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->dateTime('waktu');
            $table->string('kode_pos');
            $table->binary('bukti_transfer');
            $table->integer('flag_bukti_transfer');
            $table->integer('flag_pengiriman');
            $table->softDeletes();
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
        Schema::drop('user');
        Schema::drop('order');
    }
}
