<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Employee  extends Model
{ protected $primaryKey = 'user_id';
    protected $table ="employee";
    protected $fillable=['user_id','hiring_date','salary','branch_id'];


##################start relations ##################
public function branch(){
    return $this->belongsTo('App\Models\Branch','branch_id','branch_id');}
    public function role(){
        return $this->belongsToMany('App\Models\Role','employee_role','user_id','role_id','user_id','role_id');
    }


##################end relations#####################}
}
