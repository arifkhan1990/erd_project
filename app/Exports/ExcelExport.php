<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Excel;

class ExcelExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Applicants unique id',
            'Date of birth',
            'Mothers name',
            'Mothers nid',
            'Mothers profession',
            'Mothers gross income',
            'Fathers name',
            'Fathers profession',
            'Fathers gross income',
            'Contact address',
            'Permanent address',
            'Phone number',

            'Status',

            'Passport number',
            'Passport issue',
            'NID',
            'Name of bank',
            'Name of branch',
            'Account belongs to',
            'Bank account number',
            'Name of account',
            'Bank account type',
            //
            'Study country',
            'Name of university',

            'SSC exam result',
            'SSC passing year',
            'HSC exam result',
            'HSC passing year',





            'Academic degree',
            'Bachelors degree result',
            'Portal address of university',

            'Phone number of university',
            'Email address of university',
            'Course for applicant',
            'Degree after completion',

            'Duration of course',
            'Date of commencement',
            'Fulltime Status',
            'Working hours',

            'Applicant receiving',
            'Scholarship amount',
            'Finished status',



            'Airlines_name',
            'Ticket number text',
            'Ticket purchased',
            'Date of departure',
            'Port of embarkation',
            'Name of city',
            'Date of arrival',
            'Port of disembarkation',
            'Name of city 2',
            'Approximate distance'
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Excel::excelData());
    }
}
