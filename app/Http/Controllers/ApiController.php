<?php

namespace App\Http\Controllers;

use App\Company;
use App\Notice;
use App\NoticeType;
use App\OfficeType;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   function index(){
       $notices = Notice::orderBy("created_at", "desc")->get();
       $nTypes = NoticeType::orderBy("name", "asc")->get();
       $offices = Company::orderBy("name", "asc")->get();
       $oTypes = OfficeType::orderBy("name", "asc")->get();
       $complete['notices'] = $notices;
       $complete["offices"] = $offices;
       $complete['office_types'] = $oTypes;
       $complete['notice_types']= $nTypes;
       return json_encode($complete);
  }

  function offices($id){
       $offices = Company::where("id", ">", $id)->orderBy("name", 'asc')->get();
       return json_encode($offices);
  }

  function office_types($id){
           $office_types = OfficeType::where("id", ">", $id)->orderBy('name', "asc")->get();
      return json_encode($office_types);
  }

  function notice_types($id){
       $notice_types = NoticeType::where("id",">", $id)->orderBy("name", "asc")->get();
       return json_encode($notice_types);
  }
}
