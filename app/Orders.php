<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    public function food()
    {
        return $this->belongsToMany(Food::class);
    }
}
