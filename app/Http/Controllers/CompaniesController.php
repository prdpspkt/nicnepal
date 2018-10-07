<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Company;
use Intervention\Image\ImageManagerStatic as Image;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['companies'] = Auth::user()->companies;
        return view('companies.index', $data);

    }

    public function add()
    {

        return view('companies.add');

    }

    public function create(Request $request)
    {
        $data = $request->input();
        $data['user_id'] = Auth::user()->id;
        $company = new Company($data);
        if($request->hasFile('logo')) {
            $this->validate($request, [
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $logo = $request->file('logo');
            $logo_name    = time() . '.' . $logo->getClientOriginalExtension();
            $image_resize = Image::make($logo->getRealPath());
            $image_resize->resize(100, 100);
            $image_resize->save(public_path('images/logos/' .$logo_name));
            $destinationPath = public_path('/images/logos');
            $logo->move($destinationPath, $logo_name);
            $company->logo = "/images/logos/" . $logo_name;
        }
        else{
            $company->logo ="/images/default_logo.gif";
        }
        $company->save();
        return redirect("/companies");
    }

    public function edit($id)
    {
        $data['company'] = Company::find($id);
        return view("companies.edit", $data);
    }

    public function show($id)
    {
        $data['company'] = Company::find($id);
        return view("companies.show", $data);
    }

    public function update(Request $request)
    {
        $input = $request->input();
        $company = Company::find($request->id);
        $company->name = $input['name'];
        $company->address = $input['address'];
        $company->email = $input['email'];
        $company->phone = $input['phone'];
        $company->fax = $input['fax'];
        $company->about = $input['about'];
        if($request->hasFile('logo')) {
            $this->validate($request, [
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $old_logo = $company->logo;
            $logo = $request->file('logo');
            $logo_name = time() . '.' . $logo->getClientOriginalExtension();
            $image_resize = Image::make($logo->getRealPath());
            $image_resize->resize(100, 100);
            $image_resize->save(public_path('/images/logos/' .$logo_name));
            $destinationPath = public_path('/images/logos');
            $logo->move($destinationPath, $logo_name);
            $company->logo = "/images/logos/" . $logo_name;
            if(file_exists(public_path($old_logo))){
                unlink(public_path($old_logo));
            }
        }
        $company->save();
        return redirect("/companies");
    }

    public function delete($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('/companies');
    }
}
