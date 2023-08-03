<?php
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


class GoodRequest extends FormRequest{



    public function rules(){
        return [
            'description'=>'required',
            'sender'=>'required',
            'receiver'=>'required',
            'sender_phone'=>'required',
            'receiver_phone'=>'required',
            'weight'=>'required',
            
            'source'=>'required',
            'destination'=>'required',
            
            
            

        ];	}

    public function messages(){
        return [
            'description.required'=>'مطلوب',
            'sender.required'=>'مطلوب',
            'receiver.required'=>'مطلوب',
            'weight.required'=>'مطلوب',
            
            'source.required'=>'مطلوب',
            'destination.required'=>'مطلوب',
            'sender_phone.required'=>'مطلوب',
            'reciver_phone.required'=>'مطلوب'
            
];
    }
    public function authorize(){
        return true;
    }




}
