<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role  extends Model
{ protected $primaryKey = 'role_id';
    protected $table ="role";
    protected $fillable=['role_id','role_name'];

    public $timestamps = false;

##################start relations ##################


    public function employees(){
        return $this->belongsToMany('App\Models\Employee','employee_role','role_id','user_id','user_id','role_id');
    }

##################end relations#####################}
}
