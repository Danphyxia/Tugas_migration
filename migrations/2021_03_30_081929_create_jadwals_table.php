<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments ('id', 20);
            $table->string('kode_matakul', 10);
             $table->references('kode_matkul');
             $table->on('dosens');
             $table->onUpdate('cascade'); 
            $table->string('nidn', 10);
             $table->references('nidn');
             $table->on('dosens');
             $table->onUpdate('cascade');
            $table->string('kelas', 2);
            $table->string('hari', 15);
            $table->time ('jam_mulai');
            $table->time ('jam_selesai');
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
        Schema::dropIfExists('jadwals');
    }
}
