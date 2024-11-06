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
        Schema::create('kas_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('uangKeluar')->default(0);
            $table->string('tanggal');
            $table->integer('user_created');
            $table->integer('user_updated')->nullable();
            $table->string('name_created');
            $table->string('name_updated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas_keluars');
    }
};
