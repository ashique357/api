<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name');
            $table->float('temperature');
            $table->float('humidity');
            $table->float('coeffecient');
            $table->float('smoke');
            $table->string('accel');
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
        Schema::dropIfExists('device_data');
    }
}
