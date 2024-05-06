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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->dateTime('tgl_lahir')->nullable()->default(NULL);
            $table->string('email');
            $table->string('no_hp');
            $table->text('alamat')->nullable()->default(NULL);
            $table->unsignedBigInteger('kursus_id');
            $table->foreign('kursus_id')->references('id')->on('kursus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
