<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $fillable=['vehicle_type','vehicle_heading','number_plate','Chassis_number','Engine_number','Make','Model','Badge','Fuel_type','Tare','GVM_ATM','GCM_GTM','no_of_wheels'];


}
