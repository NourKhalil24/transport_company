<?php
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;


class BranchRequest extends FormRequest{



    public function rules(){
        return [
            'branch_name'=>'required',
            'branch_city'=>'required',
            'branch_street'=>'required'

        ];	}

    public function messages(){
        return [
            'branch_name.required'=>'اسم الفرع مطلوب ',
            'branch_city.required'=>'مدينة الفرع مطلوب',
            'branch_street.required'=>'شارع الفرع مطلوب'
];
    }
    public function authorize(){
        return true;
    }




}
