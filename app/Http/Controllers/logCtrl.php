<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\grade_course;
use App\Models\track;
use App\Models\track_course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logCtrl extends Controller
{
    public function login(){

        return view('login.loginBox');
    }

    public function loginRequest(Request $request){
        $data=[
          'email'=>$request->email,
            'password'=>$request->password,
        ];

        $user=User::with(['user_track','user_grade'])->where('email', $request->email)->first();
        $user_track=track::with('trackHasCourse')->where('id',$user->track_id)->first();
        $user_grade=grade::with('gradeHasCourse')->where('id',$user->grade_id)->first();
//        $grade_course=grade_course::with('grade')->where('grade_id',$user->grade_id)->get();
//        $track_course=track_course::with('tracks')->where('track_id',$user->track_id)->get();

       if(Auth::attempt($data)){
        return view('home.home',compact(['user','user_track','user_grade']));

       }else{
           echo 'no';
       }

    }

    public function register(){
        $grades=grade::get();
        $tracks=track::get();
        return view('login.registerBox',compact(['tracks','grades']));
    }

    public function registerRequest(Request $request){
        $request->validate([
           'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'repassword'=>'required|same:password',
            'grade'=>'required',
            'track'=>'required'

        ]);
        $store=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'grade_id'=>$request->grade,
            'track_id'=>$request->track
        ]);
        if($store){
            echo 'stored';
        }
        else{echo 'error';}

    }

    public function home(){

        return view('home.home');
    }

    public function test(){
        $track=track::with('trackHasCourse')->get();
        echo $track;
    }

}
