<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        return view('course');
    }

    public function save_course(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required",
            "description" => "required",
            "image" => "required|image|mimes:png,jpg,jpeg|max:2048"
        ]);
        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $course->description = $request->description;
        $image = $request->image;
        if ($image) {
            $fileName = time() . "." . $image->getClientOriginalExtension(); //123456.png
            $image->move("images", $fileName);
            $course->image = "images/" . $fileName;
        }
        $course->save();
        toast("Company Created Successfully","success");

        return redirect("/");
    }
}
