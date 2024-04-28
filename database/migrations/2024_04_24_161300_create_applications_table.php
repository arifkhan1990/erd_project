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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('username');
            $table->string('status')->default('pending');
            $table->string('applicant_unique_id');

            $table->string('acceptance_committee')->default('pending');
            $table->string('session_for_scholarship')->default('pending');
            $table->string('remarks')->default('pending');
            $table->string('digital_signature')->default('pending');
            $table->string('authorized_personnel')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
