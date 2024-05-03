<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    //
    public function storeCourse(Request $request)
    {

        // return $request->all();
        $course = new Courses();
        $course->name = $request->course;
        $course->details = $request->details;
        $course->save();
        return redirect('/get-courses');
    }

    public function index()
    {
        $getCourses = Courses::all();
        return view('courses', ['courses' => $getCourses]);
    }
    public function getUpdateCourseFrm($id)
    {
        $course = Courses::find($id);
        $showSaveFrm = false;
        return view('edit-course',['course'=>$course,'showSaveFrm'=>$showSaveFrm]);
    }

    public function UpdateCourse(Request $request,$id)
    {
        $course = Courses::find($id);
        $course->name = $request->course;
        $course->details = $request->details;
        $course->update();
        return redirect('/get-courses');
    }
    public function deleteCourse($id)
    {
        $course = Courses::find($id);
        if (!$course) {
            return "record not found";
        }
        $course->delete();
        return back();
    }
}
