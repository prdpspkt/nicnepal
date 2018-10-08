<?php

namespace App\Http\Controllers;

use App\NoticeType;
use Illuminate\Http\Request;
use App\Notice;
use Auth;


class NoticeTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $data['notice_types'] = NoticeType::all();
        return view("notice_types.index", $data);

    }

    function add()
    {
        return view("notice_types.add");
    }

    function create(Request $request)
    {
        if ($this->canCreateOrChange()) {
            $name = $request->input('name');
            $notice_type = new NoticeType();
            $notice_type->name = $name;
            $notice_type->slug = "false";
            $notice_type->save();
        }
        return redirect("/notice_types");
    }

    function update(Request $request)
    {
        if ($this->canCreateOrChange()) {
            $name = $request->input('name');
            $notice_type = NoticeType::find($request->id);
            $notice_type->name = $name;
            $notice_type->save();
        }
        return redirect("/notice_types");
    }

    public function edit($id)
    {
        if($this->canCreateOrChange()){
            $data['notice_type'] = NoticeType::find($id);
            return view('notice_types.edit', $data);

        }
    }

    private function canCreateOrChange()
    {
        if (Auth::user()->is_admin == true) {
            return true;
        } else {
            return false;
        }
    }

    function show($id)
    {
        $data['notice'] = Notice::find($id);
        if ($data['notice'] != null) {
            return view('notices.show', $data);
        }
        return redirect('notices');
    }

    function delete($id)
    {
        $notice = NoticeType::find($id);
        $notice->delete();
        return redirect('/notice_types');
    }
}
