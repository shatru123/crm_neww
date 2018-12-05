<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
  //
    protected $fillable=['name','mobile','alt_mobile','address','assigned_to'];

    public function user()
    {
        return $this->belongsTo('App\User','assigned_to');
    }
}
