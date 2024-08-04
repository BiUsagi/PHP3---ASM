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
        Schema::create('tin_tuc_asms', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->text('noidung');
            $table->string('mota')->nullable();
            $table->string('hinhanh')->nullable();
            $table->integer('luotxem')->default(0);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin_tuc_asms');
    }
};