<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{

    protected $fillable = ['plant', 'description'];

    public function countries() 
    {
        return $this->hasMany(Country::class);
    }

    public function families() 
    {
        return $this->hasMany(Family::class);
        
    }
}
