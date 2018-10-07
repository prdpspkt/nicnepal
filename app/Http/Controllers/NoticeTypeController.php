<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NoticeTypeController extends Controller
{
    function __construct(){
    	$this->middleware('auth');

    	if(!Auth::user()->is_admin){
    			return redirect("/home");
    	}
    }

    function index(){
    	$notice_types = NoticeType::all();
    }
}
