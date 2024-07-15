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
        Schema::create('proffessionalexperiences', function (Blueprint $table) {
            $table->Integer('cv_no')->unsigned();
            $table->foreign('cv_no')->references('cv_no')->on('c_v_s')->onDelete('cascade');
            $table->string('experience', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proffessionalexperiences');
    }
};
