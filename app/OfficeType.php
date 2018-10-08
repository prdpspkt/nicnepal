<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeType extends Model
{
    protected $table = 'office_types';
    protected $fillable = ['name', 'slug'];

    function offices(){
        return $this->hasMany("App\Company");
    }
}
