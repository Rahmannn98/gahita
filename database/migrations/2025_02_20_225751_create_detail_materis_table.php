<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('detail_materi', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('materi_id'); 
            $table->string('judul');
            $table->text('deskripsi'); 
            $table->string('video_url')->nullable(); 
            $table->timestamps(); 

            
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_materi');
    }
};
