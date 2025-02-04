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
        Schema::create('jobpost_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobposts_id');
            $table->foreign('jobposts_id')->references('id')->on('jobposts')->onDelete('cascade');
            $table->unsignedBigInteger('skills_id');
            $table->foreign('skills_id')->references('id')->on('skills')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobpost_skills');
    }
};
