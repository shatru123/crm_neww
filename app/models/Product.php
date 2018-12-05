<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','type','price','brand_id'];

    public function brand()
    {
        return $this->belongsTo('App\models\Brand');
    }
}
