<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'course_id', 'course_description', 'instructor', 'classroom', 'timeslot'
    ];
}
