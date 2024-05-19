<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalForm extends Model
{
    use HasFactory;

    protected $table = 'personal_forms';

    protected $fillable = [
        'fname', 'lname', 'image', 'gender', 'digital_signature_image', 'passport_image', 'nid_image', 'certification_image', 
        'dob', 'mothers_name', 'mothers_nid', 'mothers_profession', 'mothers_gross_income', 'fathers_name', 'fathers_profession', 
        'fathers_gross_income', 'contact_address', 'permanent_address', 'phone_number', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function educational()
    {
        return $this->hasOne(Educational::class, 'user_id', 'user_id');
    }

    public function banking()
    {
        return $this->hasOne(Banking::class, 'user_id', 'user_id');
    }

    public function travel()
    {
        return $this->hasOne(Travel::class, 'user_id', 'user_id');
    }
}
