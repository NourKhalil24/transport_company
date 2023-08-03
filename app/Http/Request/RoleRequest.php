<?php
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


class RoleRequest extends FormRequest{



    public function rules(){
        return [
            'role_name'=>'required'

        ];	}

    public function messages(){
        return [
            'role_name.required'=>'role name required'
];
    }
    public function authorize(){
        return true;
    }




}
