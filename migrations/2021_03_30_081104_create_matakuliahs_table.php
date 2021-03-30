<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->increments ('id', 20);
            $table->string ('kode_matkul', 8);
            $table->string ('nama_matkul', 50);
            $table->string ('sks', 11);
            $table->string ('kode_prodi', 5);
             $table->references('kode_prodi');
             $table->on('prodis');
             $table->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
}
