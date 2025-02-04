<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobposts extends Model
{
    //
    protected $fillable = [ 
        'title' ,
        'description' ,
        'experience',
        'salary'  ,
        'location'  ,
        'extra_info'  ,
        'company_name' ,
        'logo'

    ];

    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'jobpost_skills');
    }
}
