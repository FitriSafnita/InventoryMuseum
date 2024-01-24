<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jenis');
            $table->string('nama_koleksi')->nullable();
            $table->string('no_inventaris_lama')->nullable();
            $table->string('no_inventaris_baru')->nullable();
            $table->string('no_register')->nullable();
            $table->string('bahan')->nullable();
            $table->string('jenis_bahan')->nullable();
            $table->string('bentuk')->nullable();
            $table->string('fungsi')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('tempat_asal_dibuat')->nullable();
            $table->string('tempat_asal_didapat')->nullable();
            $table->string('cara_didapat')->nullable();
            $table->string('kondisi_benda')->nullable();
            $table->string('tempat_penyimpanan')->nullable();
            $table->string('dicatat_oleh')->nullable();
            $table->string('sumber_informasi')->nullable();
            $table->string('keterangan_lainnya')->nullable();
            $table->string('foto_brg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barang');
    }
};
