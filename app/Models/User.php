<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //    -------------------------- personal form --------------------------

    public function personal()
    {
        return $this->hasOne(PersonalForm::class);
    }

    //    ---------------------------------------------- end -  personal form

    //    ------------------------ educational form --------------------------

    public function educational()
    {
        return $this->hasOne(Educational::class);
    }

    //    -------------------------------------------- end -  educational form

    //    ------------------------ travel form --------------------------

    public function travel()
    {
        return $this->hasOne(Travel::class);
    }

    //    --------------------------------------------- end - travel form

    //    ------------------------ banking form --------------------------

    public function banking()
    {
        return $this->hasOne(Banking::class);
    }

    //    --------------------------------------------- end - banking form

    //    ------------------------ applications from users --------------------------

    public function application()
    {
        return $this->hasOne(Application::class);
    }

    //    -------------------------------------------- end -  applications from users

}
