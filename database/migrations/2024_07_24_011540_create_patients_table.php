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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('occupation');
            $table->string('address');

            // JSON for emergency contact information
            $table->json('emergency_contact')->nullable();

            // JSON for medical information
            $table->json('medical_information')->nullable();

            // JSON for identification
            $table->json('identification')->nullable();

            // JSON for consents
            $table->json('consents')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
