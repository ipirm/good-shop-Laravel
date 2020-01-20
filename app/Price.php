<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function cats()
    {
        return $this->hasMany('App\Cat');
    }
}
