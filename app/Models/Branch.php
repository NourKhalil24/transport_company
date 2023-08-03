<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Branch  extends Model
{ protected $primaryKey = 'branch_id';
    protected $table ="branch";
    protected $fillable=['branch_id','branch_name','branch_city','branch_street'];

    public $timestamps = false;

##################start relations ##################
public function employee(){
    return $this->hasMany('App\Models\Employee','branch_id','branch_id');
}

##################end relations#####################}
}
