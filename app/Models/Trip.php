<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Trip  extends Model
{ protected $primaryKey = 'trip_id';
    protected $table ="trip";
    protected $fillable=['trip_id','trip_source','trip_destination','number_of-available_seats','departure_time','departure_day','arrival_time','arrival_day','cost'];

    public $timestamps = false;

##################start relations ##################
    //public function branch(){
     //   return $this->hasOne('App\Models\Branch','branch_address');}
  // public function address(){
   //    return $this->hasMany('App\Models\Address','trip_source,trip_destination','trip_id');
  // }
##################end relations#####################}
}
