<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    use HasFactory;

    protected $table = 'educationals';

    protected $fillable = [
        'ssc_exam_result_type','ssc_exam_result', 'ssc_passing_year', 'hsc_exam_result_type','hsc_exam_result', 'hsc_passing_year', 'academic_degree', 'bachelors_degree_result', 'study_country', 'name_of_university', 'portal_address_of_university', 'phone_number_of_university', 'email_address_of_university', 'course_for_applicant', 'degree_after_completion', 'duration_of_course', 'date_of_commencement', 'applicant_status', 'working_hours', 'applicant_receiving', 'scholarship_amount', 'finished_status', 'user_id'
    ];

    public function personalForm()
    {
        return $this->belongsTo(PersonalForm::class, 'user_id', 'user_id');
    }
}
