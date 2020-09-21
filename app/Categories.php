<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function food()
    {
        return $this->hasMany('App\Food');
    }

    public function categoryName()
    {
        return $this->value('name');
    }
}
