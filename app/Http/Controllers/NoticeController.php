<?php

namespace App\Http\Controllers;

use App\NoticeType;
use Illuminate\Http\Request;
use App\Notice;
use Auth;


class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $data['notices'] = Auth::user()->notices;
        return view("notices.index", $data);

    }

    function add(){
        $data['notice_types'] = NoticeType::pluck('name', 'id')->all();
        $data['offices'] = Auth::user()->companies()->pluck('name', 'id')->all();
        return view("notices.add", $data);
    }

    function create(Request $request){
        $user_id = Auth::user()->id;
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $notice_type = $request->input('notice_type_id');
        $notice_url = $request->input('notice_url');
        $published= $request->input('published');
        $company_id =  $request->input("company_id");

        $notice_data = array(
            "title" => $title,
            "description" => $description,
            "content" => $content,
            "notice_type"=> $notice_type,
            "notice_url" => $notice_url,
            "published" => $published,
            "company_id" => $company_id,
            "user_id" => $user_id
        );
        $notice = new Notice($notice_data);
        $notice->save();
        return redirect("/notices");
    }

    function update(Request $request){
        $notice = Notice::find($request->id);
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->content = $request->input('content');
        $notice->notice_type_id = $request->input('notice_type_id');
        $notice->notice_url = $request->input('notice_url');
        $notice->published= $request->input('published');
        $notice->company_id = $request->input("company_id");
        $notice->save();
        return redirect('notices');
    }

    public function edit($id){
        $data['notice_types'] = NoticeType::pluck('name', 'id')->all();
        $data['offices'] = Auth::user()->companies()->pluck('name', 'id')->all();
        $notice = $this->canChange($id);
        if($notice != false){
            $data['notice'] = $notice;
            return view('notices.edit', $data);
        }
        else{
            redirect("/notices");
        }
    }

   private function canChange($id)
   {
       $notice = Notice::find($id);
       if ($notice->user_id == Auth::user()->id) {
           return $notice;
       } else {
           return false;
       }
   }

    function show($id){
        $data['notice'] = Notice::find($id);
        if($data['notice'] != null){
             return view('notices.show', $data);
         }
         return redirect('notices');
    }

    function delete($id){
        $notice = Notice::find($id);
        $notice->delete();
        return redirect('/notices');
    }
}
