<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Subject extends Authenticatable
{
    protected $table = "subjects";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    function users(){
        return $this->belongsToMany('App\User','lecturers_subjects','subject_id','user_id')->withPivot('type');
    }

    function courses(){
        return $this->belongsToMany('App\Course','subjects_courses','subject_id','course_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Post','subject_id');
    }




}
