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
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id('id_pembeli'); 
            $table->string('custumor'); 
            $table->date('tanggal_beli'); 
            $table->time('waktu_beli'); 
            $table->string('metode_pembayaran'); 
            $table->unsignedBigInteger('produk'); 
            $table->decimal('bayar', 8, 2); 
            $table->decimal('kembali', 8, 2); 
            $table->timestamps();

            $table->foreign('produk')->references('id_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelis');
    }
};
