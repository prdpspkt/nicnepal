<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class ApiController extends Controller
{
   function index(){
       $notices = Notice::orderBy("created_at", "desc")->get();
       return json_encode($notices);

  }
}
