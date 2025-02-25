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
        Schema::create('detail_materi', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->unsignedBigInteger('materi_id'); // Foreign key ke tabel materis
            $table->string('judul'); // Judul detail materi
            $table->text('deskripsi'); // Deskripsi detail materi
            $table->string('video_url')->nullable(); // URL video (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key constraint
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_materi');
    }
};
