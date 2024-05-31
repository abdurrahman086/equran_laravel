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
        Schema::create('hadits', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_hadits');
            $table->string('judul');
            $table->text('isi_hadits');
            $table->text('terjemahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadits');
    }
};
