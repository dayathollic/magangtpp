<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatanyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datanyas', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('nama_paket_pekerjaan');
            $table->string('sumber_data')->nullable();
            $table->string('data_sekunder')->nullable();
            $table->string('data_primer')->nullable();
            $table->string('pengolahan_data')->nullable();
            $table->string('daftar_pertanyaan')->nullable();
            $table->string('kriteria_responden')->nullable();
            $table->string('hasil_survey')->nullable();
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
        Schema::dropIfExists('datanyas');
    }
}
