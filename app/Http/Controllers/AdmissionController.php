<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $admissions = Admission::all();
        return view('admission.index',compact('courses','admissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "course" => "required",
        ]);
        $admission = new Admission();
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->address = $request->address;
        $admission->course_id = $request->course;
        $admission->save();
        toast("Admission Created Successfully","success");

        return redirect("/");
    }
}
