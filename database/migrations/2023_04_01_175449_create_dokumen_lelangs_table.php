<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_lelangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama_paket_pekerjaan');
            $table->string('rak_dokumen');
            $table->string('data_perusahaan')->nullable();
            $table->string('pengalaman_perusahaan')->nullable();
            $table->string('uraian_pengalaman_perusahaan')->nullable();
            $table->string('ustek')->nullable();
            $table->string('metodologi_dan_program_kerja')->nullable();
            $table->string('jadwal_pekerjaan')->nullable();
            $table->string('tenaga_ahli')->nullable();
            $table->string('komposisi_penugasan')->nullable();
            $table->string('jadwal_penugasan_ta')->nullable();
            $table->string('rab_penawaran')->nullable();
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
        Schema::dropIfExists('dokumen_lelangs');
    }
}
