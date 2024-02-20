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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('relation')->required();
            $table->string('name')->required();
            $table->string('occupation');
            $table->string('organization');
            $table->string('designation');
            $table->string('income');
            $table->string('cnic')->unique()->required();
            $table->string('mobile')->required();
            $table->string('whatsapp')->required();
            $table->string('address');
            // $table->bigInteger('student_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
