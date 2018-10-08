<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeType extends Model
{
    protected $table = "notice_types";
    protected $fillable = ["name", "slug"];
}
