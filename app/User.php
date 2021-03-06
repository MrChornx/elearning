<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    function subjects(){
        return $this->belongsToMany('App\Subject','lecturers_subjects','user_id','subject_id')->withPivot('type');;
    }



}
