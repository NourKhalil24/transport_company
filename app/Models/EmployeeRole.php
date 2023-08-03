<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeRole  extends Model
{ protected $primaryKey = 'id';
    protected $table ="employee_role";
    protected $fillable=['id','user_id','role_id'];

    public $timestamps = false;

##################start relations ##################
public function role(){
        return $this->belongsToMany('App\Models\Role','employee_role','user_id','role_id','user_id','role_id');
    }
     public function employees(){
        return $this->belongsToMany('App\Models\Employee','employee_role','role_id','user_id','user_id','role_id');
    }

##################end relations#####################}
}
