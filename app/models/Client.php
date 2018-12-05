<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable =[
        'name',
        'company_name',
        'email',
        'address',
        'zipcode',
        'city',
        'primary_number',
        'secondary_number',
        ];


}
