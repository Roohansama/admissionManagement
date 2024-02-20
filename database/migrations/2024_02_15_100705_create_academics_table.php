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
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->string('level')->required();
            $table->string('class')->required();
            $table->string('program')->required();
            $table->string('institute');
            $table->string('board');
            $table->string('roll')->required();
            $table->string('registration');
            $table->string('obtained')->required();
            $table->string('total')->required();
            $table->string('year')->required();
            $table->string('exam')->required();
            $table->bigInteger('student_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
