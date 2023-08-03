<?php
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


class EmployeeRequest extends FormRequest{



    public function rules(){
        return [
            'user_id'=>'required',
            'hiring_date'=>'required',
            'salary'=>'required',
            'branch_id'=>'required'

        ];	}

    public function messages(){
        return [
            'user_id.required'=>' مطلوب ',
            'hiring_date.required'=>' مطلوب',
            'salary.required'=>' مطلوب',
            'branch_id.required'=>'مطلوب'
];
    }
    public function authorize(){
        return true;
    }




}
