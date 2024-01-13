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
        Schema::create('Jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('judul_agenda');
            $table->string('fupload');
            $table->text('isi_agenda');
            $table->timestamp('tanggal_agenda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jadwal');
    }
};