<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banking extends Model
{
    use HasFactory;

    protected $table = 'bankings';

    protected $fillable = [
        'passport_number', 'passport_issue', 'nid', 'name_of_bank', 'name_of_branch', 'bank_account_number', 'name_of_account', 
        'bank_account_type', 'account_belongs', 'belongs_to', 'user_id'
    ];

    public function personalForm()
    {
        return $this->belongsTo(PersonalForm::class, 'user_id', 'user_id');
    }
}
