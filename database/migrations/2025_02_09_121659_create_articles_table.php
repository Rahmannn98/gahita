<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->string('image')->nullable();
        $table->string('category')->nullable();
        $table->text('references')->nullable(); // Kolom referensi
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
