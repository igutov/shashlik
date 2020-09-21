<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'title',
        'weight',
        'composition',
        'price',
        'price_new',
        'categories_id'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Categories'); //Categories ???
        // return $this->hasMany('App\Category');
    }

    public function orders()
    {
        return $this->belongsToMany(Orders::class);
    }
}
