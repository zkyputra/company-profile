<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip',15);
            $table->string('nama');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
