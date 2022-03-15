<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function courseindex() {
        // dd('here');
        return view('courses.index');
    }
    public function course() {
        // dd('here');
        $data['courses'] = Course::latest()->get();
        return view('courses.course',$data);
    }
    public function createcourse(Request $request) {
        // dd($request->all());
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path().'/courseimage/',$imageName);
       $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $imageName,
        ]);
        return $course;
        return redirect()->back()->with('message','Course Created Successfully');
    }
    public function loadcourse(Request $request) {
        $id = $request->id;
        $course = Course::find($id);
        return $course;
    }
    public function editcourse(Request $request) {
        $course = Course::find($request->id);
        if($request->has('image')) {

       
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path().'/courseimage/',$imageName);
        $course->image = $imageName;
        }
       
      $course->title = $request->title;
      $course->description = $request->description;
      $course->duration = $request->duration;
      $course->price = $request->price;
      $course->category = $request->category;
     
      $course->save();
   
   
        return $course;
    }
    public function deletecourse(Request $request) 
    {
        $id = $request->id;
        $course = Course::find($id);
        $course->delete();
        return 'course deleted';
    }

}
