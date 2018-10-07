<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table="companies";
    protected $fillable = ["name", "about", "address", "phone", "email", "fax", "logo", "user_id"];

    function user(){
    	return $this->belongsTo("App\User");
    }

    function notices(){
        return $this->hasMany("App\Notice");
    }
}
