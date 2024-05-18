<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travel';

    protected $fillable = [
        'airlines_name', 'ticket_number', 'ticket_number_text', 'ticket_purchased', 'date_of_departure', 'port_of_embarkation', 
        'name_of_city', 'date_of_arrival', 'port_of_disembarkation', 'name_of_city_2', 'approximate_distance', 'user_id'
    ];

    public function personalForm()
    {
        return $this->belongsTo(PersonalForm::class, 'user_id', 'user_id');
    }
}
