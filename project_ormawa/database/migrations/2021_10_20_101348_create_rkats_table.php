<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkats', function (Blueprint $table) {
            $table->id();
            $table->char('id_rkat',8)->unique();
            $table->char('nama_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->char('id_ormawa')->unique();
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
        Schema::dropIfExists('rkats');
    }
}
