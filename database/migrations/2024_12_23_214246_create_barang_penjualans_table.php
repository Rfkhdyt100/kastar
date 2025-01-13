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
        Schema::create('barang_penjualans', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk'); 
            $table->unsignedBigInteger('id_penjualan'); 
            $table->integer('produk_terjual'); 
            $table->decimal('subtotal', 8, 2); 
            $table->timestamps(); 
            
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade'); 
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_penjualans');
    }
};
