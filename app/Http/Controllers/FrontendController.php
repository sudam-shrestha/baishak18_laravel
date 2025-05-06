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

/*************  ✨ Windsurf Command ⭐  *************/
    /**
/*******  781b20b5-99d1-4d64-9851-3d9aa1e981b9  *******/
    public function delete_company($id)
    {
        $company = Company::find($id);
        $company->delete();
        toast("Company Deleted Successfully","success");
        return redirect()->back();
    }
}
