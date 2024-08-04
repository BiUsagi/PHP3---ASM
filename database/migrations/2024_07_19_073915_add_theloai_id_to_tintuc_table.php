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
        Schema::table('tin_tuc_asms', function (Blueprint $table) {
            $table->unsignedBigInteger('theloai_id')->after('id');
            $table->foreign('theloai_id')->references('id')->on('theloai_asm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tin_tuc_asms', function (Blueprint $table) {
            $table->dropForeign(['theloai_id']);
            $table->dropColumn('theloai_id');
        });
    }
};