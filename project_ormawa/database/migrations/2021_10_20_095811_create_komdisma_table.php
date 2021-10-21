<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomdismaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komdismas', function (Blueprint $table) {
            $table->id();
            $table->integer('NIK')->unique();
            $table->integer('NPI')->unique();
            $table->integer('NIP')->unique();
            $table->char('nama_lengkap');
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
        Schema::dropIfExists('komdismas');
    }
}
