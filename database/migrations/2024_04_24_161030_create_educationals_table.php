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
        Schema::create('educationals', function (Blueprint $table) {
            $table->id();
            $table->string("ssc_exam_result");
            $table->string("ssc_passing_year");
            $table->string("hsc_exam_result");
            $table->string("hsc_passing_year");
            $table->string("academic_degree");
            $table->string("bachelors_degree_result");
            $table->string("study_country");
            $table->string("name_of_university");
            $table->string("portal_address_of_university");
            $table->string("phone_number_of_university");
            $table->string("email_address_of_university");
            $table->string("course_for_applicant");
            $table->string("degree_after_completion");
            $table->string("duration_of_course");
            $table->string("date_of_commencement");
            $table->string("applicant_status");
            $table->string("working_hours");
            $table->string("applicant_receiving");
            $table->string("scholarship_amount");
            $table->string("finished_status");
            $table->string("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educationals');
    }
};
