<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\grade_course;
use Illuminate\Http\Request;

class gradeCtrl extends Controller
{

    public function gradeView(){

        return view('grade.gradeView');

    }

    public function storeGrade(Request $request){
        $store=grade::create([
           'grade'=>$request->grade,
        ]);
        return redirect()->back();
    }

    public function gradeCourseView (){
        $grades=grade::get();
        return view('grade.gradeCourseView',compact('grades'));
    }

    public function addGradeCourse(Request $request){
        $store=grade_course::create([
            'course'=>$request->course,
            'grade_id'=>$request->grade
        ]);
        return redirect()->back();
    }

    public function gradeCrudRead(){
        $data=grade_course::with('grade')->get();
        return view('grade.gradeCrud',compact('data'));
    }

    public function gradeCrudDel(Request $request){
        $id=$request->DelId;
        $delete=grade_course::where('id',$id)->delete();
        return redirect()->back();

    }

    public function gradeCrudUpdate(Request $request){
        $grades=grade::get();
        $id=$request->UpdateId;
        $info=grade_course::with('grade')->where('id',$id)->first();
        return view('grade.gradeCrudUpdate',compact(['info','grades']));
    }
    public function gradeCrudUpdateRequest(Request $request){
        $id=$request->id;
        $course=$request->course;
        $grade=$request->grade;
        $update=grade_course::where('id',$id)->update([
                'course'=>$course,
                'grade_id'=>$grade]);
        return redirect()->back();



    }




















}
