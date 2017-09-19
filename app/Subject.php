<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'course_id', 'course_description', 'instructor', 'classroom', 'timeslot'
    ];

    public function instructor(){
         return $this->belongsTo('App\Teacher', 'instructor', 'id');
    }
    public function semester(){
        return $this->belongsTo('App\Semester', 'semester_id', 'id');
    }
}
