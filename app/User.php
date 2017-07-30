<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'ID_no',
        'gender',
        'age',
        'year_level',
        'department_id',
        'major',
        'address',
        'birthdate',
        'contact_no',
        'father_first_name',
        'father_last_name',
        'father_contact_no',
        'mother_first_name',
        'mother_last_name',
        'mother_contact_no',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function department(){
        return $this->belongsTo('App\Department', 'department_id', 'department_id');
    }
}
