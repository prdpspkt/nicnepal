<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        if(!Auth::user()->is_admin){
            die("Access denied");
        }
        $data['users'] = User::all();
        return view('users/index', $data);

    }
}
