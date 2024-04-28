<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Excel extends Model
{
    public static function excelData()
    {
        $inputs = [];
        $applicant = Application::all();

        foreach ($applicant as $data) {

            $tt = [];

            $new_data = $data->user_id;

            $user = User::find($new_data);

            $tt['firstname'] = $user->personal->fname;
            $tt['lastname'] = $user->personal->lname;
            $tt['applicant_unique_id'] = $user->application->applicant_unique_id;
            $tt['dob'] = $user->personal->dob;
            $tt['mothers_name'] = $user->personal->mothers_name;
            $tt['mothers_nid'] = $user->personal->mothers_nid;
            $tt['mothers_profession'] = $user->personal->mothers_profession;
            $tt['mothers_gross_income'] = $user->personal->mothers_gross_income;
            $tt['fathers_name'] = $user->personal->fathers_name;
            $tt['fathers_profession'] = $user->personal->fathers_profession;
            $tt['fathers_gross_income'] = $user->personal->fathers_gross_income;
            $tt['contact_address'] = $user->personal->contact_address;
            $tt['permanent_address'] = $user->personal->permanent_address;
            $tt['phone_number'] = $user->personal->phone_number;

            $tt['status'] = $user->application->status;

            $tt['passport'] = $user->banking->passport_number;
            $tt['passport_issue'] = $user->banking->passport_issue;
            $tt['nid'] = $user->banking->nid;
            $tt['name_of_bank'] = $user->banking->name_of_bank;
            $tt['name_of_branch'] = $user->banking->name_of_branch;
            $tt['account_belongs_to'] = $user->banking->belongs_to;
            $tt['bank_account_number'] = $user->banking->bank_account_number;
            $tt['name_of_account'] = $user->banking->name_of_account;
            $tt['bank_account_type'] = $user->banking->bank_account_type;

            $tt['study_country'] = $user->educational->study_country;
            $tt['name_of_university'] = $user->educational->name_of_university;

            $tt['ssc_exam_result'] = $user->educational->ssc_exam_result;
            $tt['ssc_passing_year'] = $user->educational->ssc_passing_year;
            $tt['hsc_exam_result'] = $user->educational->hsc_exam_result;
            $tt['hsc_passing_year'] = $user->educational->hsc_passing_year;


            $tt['academic_degree'] = $user->educational->academic_degree;
            $tt['bachelors_degree_result'] = $user->educational->bachelors_degree_result;
            $tt['portal_address_of_university'] = $user->educational->portal_address_of_university;

            $tt['phone_number_of_university'] = $user->educational->phone_number_of_university;
            $tt['email_address_of_university'] = $user->educational->email_address_of_university;
            $tt['course_for_applicant'] = $user->educational->course_for_applicant;
            $tt['degree_after_completion'] = $user->educational->degree_after_completion;


            $tt['duration_of_course'] = $user->educational->duration_of_course;
            $tt['date_of_commencement'] = $user->educational->date_of_commencement;
            $tt['applicant_status'] = $user->educational->applicant_status;
            $tt['working_hours'] = $user->educational->working_hours;

            $tt['applicant_receiving'] = $user->educational->applicant_receiving;
            $tt['scholarship_amount'] = $user->educational->scholarship_amount;
            $tt['finished_status'] = $user->educational->finished_status;

            $tt['airlines_name'] = $user->travel->airlines_name;
            $tt['ticket_number_text'] = $user->travel->ticket_number_text;
            $tt['ticket_purchased'] = $user->travel->ticket_purchased;
            $tt['date_of_departure'] = $user->travel->date_of_departure;
            $tt['port_of_embarkation'] = $user->travel->port_of_embarkation;
            $tt['name_of_city'] = $user->travel->name_of_city;
            $tt['date_of_arrival'] = $user->travel->date_of_arrival;
            $tt['port_of_disembarkation'] = $user->travel->port_of_disembarkation;
            $tt['name_of_city_2'] = $user->travel->name_of_city_2;
            $tt['approximate_distance'] = $user->travel->approximate_distance;


            array_push($inputs, $tt);
        }

        return $inputs;
    }
}
