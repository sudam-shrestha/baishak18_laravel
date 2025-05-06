<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        $companies = Company::orderBy('id','desc')->get();
        // $companies = Company::where('email','sudamshres4@gmail.com')->orWhere('id',2)->get();
        // $companies = Company::where('name', "like", "%s%")->get();
        // return $companies;
        return view("about", compact('companies'));
    }

    public function save_company(Request $request)
    {
        // return $request;
        $request->validate([
            "name" => "required|alpha|lowercase",
            "email" => "required|email|max:100|min:10",
            "phone" => "required|numeric|digits:10",
            "add" => "required",
            "logo" => "required|image|mimes:png,jpg,jpeg|max:2048"
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->add;
        $logo = $request->logo;
        if ($logo) {
            $fileName = time() . "." . $logo->getClientOriginalExtension(); //123456.png
            $logo->move("images", $fileName);
            $company->logo = "images/" . $fileName;
        }
        $company->save();
        toast("Company Created Successfully","success");

        return redirect("/");
    }

    public function delete_company($id)
    {
        $company = Company::find($id);
        $company->delete();
        toast("Company Deleted Successfully","success");
        return redirect()->back();
    }

    public function edit_company($id)
    {
        $company = Company::find($id);
        return view("edit-company", compact('company'));
    }


    public function update_company(Request $request, $id)
    {
        // return $request;
        $request->validate([
            "name" => "required|alpha_dash|lowercase",
            "email" => "required|email|max:100|min:10",
            "phone" => "required|numeric|digits:10",
            "add" => "required",
            "logo" => "nullable|image|mimes:png,jpg,jpeg|max:2048"
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->add;
        $logo = $request->logo;
        if ($logo) {
            $fileName = time() . "." . $logo->getClientOriginalExtension(); //123456.png
            $logo->move("images", $fileName);
            $company->logo = "images/" . $fileName;
        }
        $company->update();
        toast("Company Updated Successfully","success");

        return redirect()->back();
    }
}
