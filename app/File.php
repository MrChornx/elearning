<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class File extends Authenticatable
{
    protected $table = "files";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    public function posts()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }


}
