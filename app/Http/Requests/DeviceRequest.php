<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class DeviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'device_name' => 'required',
            'temperature' => 'required',
            'humidity' => 'required',
            'coeffecient'=>'required',
            'smoke'=>'required',
            'accel'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'device_name.required' => 'Device Name is Required',
            'temperature.required' => 'Temperature is Required',
            'humidity.required' => 'Humidity is Required',
            'coeffecient.required'=>'Coeffecient is Required',
            'smoke.required'=>'Smoke is Required',
            'accel.required'=>'Acceleration is Required'
        ];
    }
}
