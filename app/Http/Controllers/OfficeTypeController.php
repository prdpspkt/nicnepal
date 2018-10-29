<?php

namespace App\Http\Controllers;

use App\OfficeType;
use Illuminate\Http\Request;
use Auth;


class OfficeTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    function index()
    {
        $this->check();
        $data['office_types'] = OfficeType::all();
        return view("office_types.index", $data);

    }

    function add()
    {
        $this->check();
        return view("office_types.add");
    }

    function create(Request $request)
    {
        $this->check();
        $name = $request->input('name');
        $slug = $request->input("slug");
        $office_type = new OfficeType();
        $office_type->name = $name;
        $office_type->slug = $slug;
        $office_type->save();

        return redirect("/office_types");
    }

    function update(Request $request)
    {
        $this->check();
        $name = $request->input('name');
        $slug = $request->input("slug");
        $office_type = OfficeType::find($request->id);
        $office_type->name = $name;
        $office_type->slug = $slug;
        $office_type->save();
        return redirect("/office_types");
    }

    public function edit($id)
    {
        $this->check();
        $data['office_type'] = OfficeType::find($id);
        return view('office_types.edit', $data);

    }

    function delete($id)
    {
        $this->check();
        $office = OfficeType::find($id);
        $office->delete();
        return redirect('/office_types');
    }

    private function check()
    {
        if (Auth::user()->is_admin == false) {
            return redirect("/home");
        }
    }
}
