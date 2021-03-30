<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frss', function (Blueprint $table) {
            $table->increments ('id', 20);
            $table->string('npm', 10);
             $table->references('npm');
             $table->on('mahasiswas');
             $table->onUpdate('cascade');
            $table->string('kode_matakul', 8);
             $table->references('kode_matkul');
             $table->on('matakuliahs');
             $table->onUpdate('cascade');
            $table->string('tahun_ajaran', 10);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frss');
    }
}
