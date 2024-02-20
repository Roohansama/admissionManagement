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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('level')->required();
            $table->string('batch')->required();
            $table->string('class')->required();
            $table->string('program')->required();
            $table->string('type')->required();
            $table->string('name')->required();
            $table->string('picture')->nullable();
            $table->string('father')->required();
            $table->string('gender')->required();
            $table->date('dob')->required();
            $table->string('cnic')->unique()->required();
            $table->string('email')->unique();
            $table->string('religion')->required();
            $table->string('marital');
            $table->string('mobile')->required();
            $table->string('landline');
            $table->string('blood');
            $table->string('nationality')->required();
            $table->string('hafiz')->required();
            $table->string('referred');
            $table->string('city');
            $table->string('current_address')->required();
            $table->string('permanent_address')->required();
            $table->string('person');
            $table->string('relation');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
