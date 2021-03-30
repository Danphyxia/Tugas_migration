<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments ('id', 20);
            $table->string('npm', 10);
            $table->string('nama', 50);
            $table->string('kelas', 2);
            $table->string('nidn', 10);
             $table->references('nidn');
             $table->on('dosens');
             $table->onUpdate('cascade');
            $table->string ('tahun_masuk', 4);
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
        Schema::dropIfExists('mahasiswas');
    }
}
