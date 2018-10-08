<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table="companies";
    protected $fillable = ["name", "office_type_id", "about", "address", "phone", "email", "fax", "logo", "user_id"];

    function user(){
    	return $this->belongsTo("App\User");
    }

    function notices(){
        return $this->hasMany("App\Notice");
    }

    function office_type(){
        return $this->belongsTo('App\OfficeType');
    }
}
