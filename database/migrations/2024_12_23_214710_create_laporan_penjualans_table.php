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
        Schema::create('laporan_penjualans', function (Blueprint $table) {
            $table->id('id_laporan_penjualan'); 
            $table->unsignedBigInteger('id_penjualan'); 
            $table->date('tanggal_laporan'); 
            $table->decimal('total_pendapatan_laporan', 8, 2); 
            $table->integer('jumlah_transaksi_laporan'); 
            $table->timestamps();
             
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_penjualans');
    }
};
