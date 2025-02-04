<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = [ 
        'name' ,
    ];
    public function jobposts()
    {
        return $this->belongsToMany(Jobposts::class, 'jobpost_skills');
    }
}
