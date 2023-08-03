<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Good  extends Model
{ protected $primaryKey = 'goods_id';
    protected $table ="good";
    protected $fillable=['goods_id','description','sender','receiver','sender_phone','receiver_phone','weight','source','destination'];
    
    public $timestamps = false;
##################start relations ##################
    public function branchSender(){
      return $this->belongsTo('App\Models\Branch','sender','branch_id');}
        public function branchReceiver(){
       return $this->belongsTo('App\Models\Branch','receiver','branch_id');}

##################end relations#####################

}