<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontraks', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama_paket_pekerjaan');
            $table->string('tahun');
            $table->string('rak_dokumen');
            $table->string('spk')->nullable();
            $table->string('spmk')->nullable();
            $table->string('bast')->nullable();
            $table->string('pajak1')->nullable();
            $table->string('pajak2')->nullable();
            $table->string('pajak3')->nullable();
            $table->string('referensi_perusahaan')->nullable();
            $table->string('referensi_ta')->nullable();
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
        Schema::dropIfExists('kontraks');
    }
}
