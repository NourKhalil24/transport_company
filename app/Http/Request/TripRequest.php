<?php
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


class TripRequest extends FormRequest{



    public function rules(){
        return [
            'trip_source'=>'required',
            'trip_destination '=>'required',
            
            'departure_time'=>'required',
            'departure_day'=>'required',
            
            'cost'=>'required'



        ];	}

    public function messages(){
        return [
            'trip_source.required'=>'required',
            'trip_destination.required'=>'required ',
            
            'departure_time.required'=>'required',
            'departure_day.required'=>'required',
            
            'cost.required'=>'required'

];
    }
    public function authorize(){
        return true;
    }




}
