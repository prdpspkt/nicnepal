<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "notices";
    protected $fillable = ['title', 'description', 'notice_type', 'published', 'content', "notice_url", "user_id", "company_id"];

    function user(){
        return belongsTo('App\User');
    }
}
