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
        Schema::create('education', function (Blueprint $table) {
            $table->tinyInteger('id_edu')->autoIncrement();
            $table->string('sekolah');
            $table->string('pendidikan');
            $table->string('tahun');
            $table->text('deskripsi');
            $table->timestamps();
            $table->unsignedBigInteger('id')->nullable();
            $table->foreign('id')->references('id')->on('profile')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
