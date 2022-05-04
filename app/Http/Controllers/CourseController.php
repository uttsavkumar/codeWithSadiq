<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['course'] = Course::all();
        return view('Admin.manageCourse',$data);
    }
    public function setDisable($id){
        $p = Course::find($id);
        $p->status = 0;
        $p->save(); 
        return redirect()->route('course.index');
    }
    public function setActive($id){
        $p = Course::find($id);
        $p->status = 1;
        $p->save(); 
        return redirect()->route('course.index');
    }
    public function delete($id){
        $p = Course::find($id);
        $p->delete();
        return redirect()->route('course.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.insertCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Course();
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'discounted_price' => 'required',
            'category' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);
        $p->title = $request->title;
        $p->price = $request->price;
        $p->discounted_price = $request->discounted_price;
        $p->duration = $request->duration;
        $p->category = $request->category;
        $p->description = $request->description;
        $p->status = $request->status;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path('images'),$image->getClientOriginalName());
            $p->image = $request->file('image')->getClientOriginalName();
        }

        $p->save();
        return redirect()->route('course.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $p['data'] = Course::find($course)->first();
       
        return view('Admin.editCourse',$p);
        
      
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
