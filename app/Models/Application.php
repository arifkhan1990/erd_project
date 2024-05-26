<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id', 'username', 'applicant_unique_id'
    ];
    public function user()
    {
        return $this->belongsTo(Application::class);
    }
}
