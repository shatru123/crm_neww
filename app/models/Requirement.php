<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable=['lead_id','product_or_service_id'];

    public function lead()
    {
        return $this->belongsTo('App\models\Lead');
    }


}
