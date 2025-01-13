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
        Schema::create('shifts', function (Blueprint $table) { 
            $table->id('id_shift'); 
            $table->unsignedBigInteger('id_user'); 
            $table->date('tanggal_mulai'); 
            $table->time('waktu_mulai'); 
            $table->time('waktu_selesai'); 
            $table->text('keterangan')->nullable(); 
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
