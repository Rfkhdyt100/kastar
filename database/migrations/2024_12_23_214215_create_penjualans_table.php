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
        Schema::create('penjualans', function (Blueprint $table) { 
            $table->id('id_penjualan'); 
            $table->unsignedBigInteger('id_user'); 
            $table->unsignedBigInteger('id_pelanggan'); 
            $table->decimal('total_pendapatan', 8, 2); 
            $table->date('tanggal_penjualan'); 
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade'); 
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
