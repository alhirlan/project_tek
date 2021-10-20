<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonrkatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonrkats', function (Blueprint $table) {
            $table->id();
            $table->char('ID_RKAT')->unique();
            $table->char('nama_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->char('ID_Ormawa')->unique();
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
        Schema::dropIfExists('nonrkats');
    }
}
