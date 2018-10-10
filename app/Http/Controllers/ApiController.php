<?php

namespace App\Http\Controllers;

use App\Company;
use App\Notice;
use App\NoticeType;

class ApiController extends Controller
{
   function index(){
       $notices = Notice::orderBy("created_at", "desc")->get();
       $notices_data = [];
       foreach($notices as $notice){
            $notice_data = $notice;
            echo $notice_data['office_name'] = $notice->company['name'];
            unset($notice_data['company']);
            $notice_data['user_name'] = $notice->user['name'];
            unset($notice_data['user']);
            array_push($notices_data, $notice_data);
       }
       return json_encode($notices_data);
  }

  function offices(){
       $offices = Company::orderBy("name", 'asc')->get();
       return json_encode($offices);
  }

  function notice_types(){
       $notice_types = NoticeType::orderBy("name", "asc");
       return json_encode($notice_types);
  }
}
