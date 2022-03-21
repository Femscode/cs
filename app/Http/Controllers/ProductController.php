<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function ann() {
        $data['ann'] = Announcement::latest()->get();
        $data['courses'] = Course::latest()->get();
        return view('ann.index',$data);
    }
    public function createann(Request $request) {
      
       $ann = Announcement::create([
            'name' => $request->name,
            'description' => $request->description,
            'course_id' => $request->course_id,
           
        ]);
        return $ann;
    }
    public function loadann(Request $request) {
        $id = $request->id;
        $ann = Announcement::find($id);
        return $ann;
    }
    public function editann(Request $request) {
        $ann = Announcement::find($request->id);
       
       
      $ann->name = $request->name;
      $ann->description = $request->description;
      $ann->course_id = $request->course_id;
     
     
      $ann->save();
   
   
        return $ann;
    }
    public function deleteann(Request $request) 
    {
        $id = $request->id;
        $ann = Announcement::find($id);
        $ann->delete();
        return 'course deleted';
    }

    public function courseindex() {
        // dd('here');
        return view('courses.index');
    }
    public function course() {
        // dd('here');
        $data['courses'] = Course::latest()->get();
        $data['ann'] = Announcement::latest()->get();
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
