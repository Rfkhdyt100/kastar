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
        Schema::create('pembelian_produks', function (Blueprint $table) {
            $table->id('id_pembelian_produk'); 
            $table->unsignedBigInteger('id_pembeli'); 
            $table->unsignedBigInteger('id_produk'); 
            $table->integer('jumlah'); 
            $table->timestamps();

            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembelis')->onDelete('cascade'); 
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_produks');
    }
};
