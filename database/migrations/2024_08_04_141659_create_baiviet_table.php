<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->id();
            $table->string('ten_bai');
            $table->text('mo_ta')->nullable();
            $table->longText('noi_dung');
            $table->string('hinh_anh')->nullable();
            $table->integer('luot_xem')->default(0);
            $table->unsignedBigInteger('id_loai');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('id_loai')->references('id')->on('theloai')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baiviet');
    }
};