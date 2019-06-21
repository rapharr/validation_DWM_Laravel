<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{
    protected $fillable = ['name', 'brand' , 'color', 'kind_id', 'description'];
    
    public function kind()
    {
        return $this->belongsTo('App\Kind');
    }
}