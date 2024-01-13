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
        Schema::create('Berita', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('kategori');
            $table->string('judul');
            $table->string('fupload');
            $table->text('isi');
            $table->timestamp('tanggal')->nullable()->default(NULL);
            $table->timestamp('jam')->nullable()->default(NULL);
            // $table->timestamp('jam')->default(NULL);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Berita');
    }
};