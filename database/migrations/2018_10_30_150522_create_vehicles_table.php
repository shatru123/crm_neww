<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_type');
            $table->string('vehicle_heading');
            $table->string('number_plate');
            $table->string('Chassis_number')->unique();
            $table->string('Engine_number')->unique();
            $table->string('Make');
            $table->string('Model');
            $table->string('Badge');
            $table->string('Fuel_type');
            $table->string('Tare');
            $table->string('GVM_ATM');
            $table->string('GCM_GTM');
            $table->string('no_of_wheels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
