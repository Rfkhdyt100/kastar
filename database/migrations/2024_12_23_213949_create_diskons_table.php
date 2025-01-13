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
        Schema::create('diskons', function (Blueprint $table) {
            $table->id('id_diskon'); 
            $table->string('nama_diskon'); 
            $table->decimal('persentase_diskon', 5, 2); 
            $table->date('tanggal_mulai_diskon'); 
            $table->date('tanggal_berakhir_diskon'); 
            $table->unsignedBigInteger('id_produk'); 
            $table->timestamps();
            
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskons');
    }
};
