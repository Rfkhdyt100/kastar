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
        Schema::create('stoks', function (Blueprint $table) {
            $table->id('id_stok'); 
            $table->unsignedBigInteger('id_produk'); 
            $table->date('tanggal_update_stok'); 
            $table->integer('stok_awal'); 
            $table->integer('stok_akhir'); 
            $table->text('keterangan')->nullable(); 
            $table->timestamps(); 
            
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};
