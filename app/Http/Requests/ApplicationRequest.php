<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Personal Form Validation
            'fname' => 'required|string|max:765',
            'lname' => 'required|string|max:765',
            'image' => 'nullable|string',
            'gender' => 'required|string|max:765',
            'digital_signature_image' => 'required|string',
            'passport_image' => 'required|string',
            'nid_image' => 'required|string',
            'certification_image' => 'required|string',
            'dob' => 'required|date',
            'mothers_name' => 'required|string|max:765',
            'mothers_nid' => 'required|string|max:765',
            'mothers_profession' => 'required|string|max:765',
            'mothers_gross_income' => 'required|string|max:765',
            'fathers_name' => 'required|string|max:765',
            'fathers_profession' => 'required|string|max:765',
            'fathers_gross_income' => 'required|string|max:765',
            'contact_address' => 'required|string|max:765',
            'permanent_address' => 'required|string|max:765',
            'phone_number' => 'required|string|max:765',

            // Educational Form Validation
            'ssc_exam_result_type' => 'required|string|max:765',
            'ssc_exam_result' => 'required|string|max:765',
            'ssc_passing_year' => 'required|string|max:765',
            'hsc_exam_result_type' => 'required|string|max:765',
            'hsc_passing_year' => 'required|string|max:765',
            'hsc_exam_result' => 'required|string|max:765',
            'academic_degree' => 'required|string|max:765',
            'bachelors_degree_result' => 'nullable|string|max:765',
            'study_country' => 'required|string|max:765',
            'name_of_university' => 'nullable|string|max:765',
            'portal_address_of_university' => 'nullable|string|max:765',
            'phone_number_of_university' => 'required|string|max:765',
            'email_address_of_university' => 'required|email|max:765',
            'course_for_applicant' => 'required|string|max:765',
            'degree_after_completion' => 'required|string|max:765',
            'duration_of_course' => 'required|string|max:765',
            'date_of_commencement' => 'required|date',
            'applicant_status' => 'required|string|max:765',
            'working_hours' => 'required|string|max:765',
            'applicant_receiving' => 'required|string|max:765',
            'scholarship_amount' => 'required|string|max:765',
            'finished_status' => 'required|string|max:765',

            // Banking Form Validation
            'passport_number' => 'required|string|max:765',
            'passport_issue' => 'required|date',
            'nid' => 'required|string|max:765',
            'name_of_bank' => 'required|string|max:765',
            'name_of_branch' => 'required|string|max:765',
            'bank_account_number' => 'required|string|max:765',
            'name_of_account' => 'required|string|max:765',
            'bank_account_type' => 'required|string|max:765',
            'account_belongs' => 'required|string|max:765',
            'belongs_to' => 'required|string|max:765',

            // Travel Form Validation
            'airlines_name' => 'required|string|max:765',
            'ticket_number' => 'required|string|max:765',
            'ticket_number_text' => 'required|string|max:765',
            'ticket_purchased' => 'required|string|max:765',
            'date_of_departure' => 'required|date',
            'port_of_embarkation' => 'required|string|max:765',
            'name_of_city' => 'required|string|max:765',
            'date_of_arrival' => 'required|date',
            'port_of_disembarkation' => 'required|string|max:765',
            'name_of_city_2' => 'required|string|max:765',
            'approximate_distance' => 'required|string|max:765',
        ];
    }
}
