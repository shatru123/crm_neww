<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('mobile')->unique();
            $table->String('alt_mobile')->unique();
            $table->String('address');
            $table->String('city');
            $table->String('district');
            $table->String('pan_no');
            $table->String('adhar_no');
            $table->String('license_no');
            $table->String('photo');
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
        Schema::dropIfExists('drivers');
    }
}
