<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //
    public function semesters(){
        return $this->hasMany('App\Semester', 'year_id', 'id');
    }
}
