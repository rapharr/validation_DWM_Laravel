<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    public function piano()
    {
        return $this->hasMany('App\Piano');
    }
}