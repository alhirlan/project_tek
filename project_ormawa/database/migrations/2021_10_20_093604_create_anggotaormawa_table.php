<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaormawaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotaormawas', function (Blueprint $table) {
            $table->id();
            $table->char('NIM')->unique();
            $table->char('nama_lengkap');
            $table->char('prodi');
            $table->char('id_ormawa');
            $table->char('status');

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
        Schema::dropIfExists('anggotaormawas');
    }
}
