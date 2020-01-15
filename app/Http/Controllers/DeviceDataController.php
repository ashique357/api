<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
//use Illuminate\Http\Request;
use App\DeviceData;
use App\Http\Requests\DeviceRequest;

class DeviceDataController extends Controller
{
    public function get_data(DeviceRequest $dr){
        $this->validate( $dr, $dr->rules(), $dr->messages());
        $d=new DeviceData();
        $d->device_name=$dr->device_name;
        $d->temperature=$dr->temperature;
        $d->humidity=$dr->humidity;
        $d->smoke=$dr->smoke;
        $d->coeffecient=$dr->coeffecient;
        $d->accel=$dr->accel;
        $d->save();
        return response()->json('success',200);
    }
}
