<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('sampul')->nullable();
            $table->text('abstrak')->nullable();
            $table->string('nama_paket_pekerjaan');
            $table->string('tahun');
            $table->string('instansi_pekerjaan');
            $table->string('rak_dokumen');
            $table->string('laporan_pendahuluan')->nullable();
            $table->string('laporan_antara')->nullable();
            $table->string('laporan_akhir')->nullable();
            $table->string('policy_brief')->nullable();
            $table->string('naskah_akademik')->nullable();
            $table->string('rancangan_peraturan')->nullable();
            $table->string('produk_lainnya')->nullable();
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
        Schema::dropIfExists('laporans');
    }
}
