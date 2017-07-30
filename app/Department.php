<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_id',
        'department_name',
        'year_levels',
    ];

    public function students(){
        return $this->hasMany('App\User', 'department_id', 'department_id');
    }
}
