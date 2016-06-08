<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Course extends Authenticatable
{
    protected $table = "courses";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    function subjects(){
        return $this->belongsToMany('App\Subject','subjects_courses','course_id','subject_id');
    }



}
