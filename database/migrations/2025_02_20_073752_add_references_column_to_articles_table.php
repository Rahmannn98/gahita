<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk menambahkan kolom 'references'.
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('references')->nullable();
        });
    }

    /**
     * Mengembalikan kolom jika migrasi di-rollback.
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('references');
        });
    }
};
