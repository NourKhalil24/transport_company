<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContactNOOR extends Model
{ protected $primaryKey = 'id';
    protected $table ="contacts";
    protected $fillable=['id','user_id','email','comment'];

    public $timestamps = false;


}
