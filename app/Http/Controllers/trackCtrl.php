<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\track;
use App\Models\track_course;
use Illuminate\Http\Request;

class trackCtrl extends Controller
{
    public function trackView(){

        return view('track.trackView');

    }

    public function storeTrack(Request $request){
        $store=track::create([
            'track'=>$request->track,
        ]);
        return redirect()->back();
    }

    public function trackCourseView (){
        $trackes=track::get();
        return view('track.trackCourseView',compact('trackes'));
    }

    public function addTrackCourse(Request $request){
        $store=track_course::create([
            'track'=>$request->course,
            'track_id'=>$request->track
        ]);
        return redirect()->back();
    }


    public function trackCrudRead(){
        $data=track_course::with('tracks')->get();
        return view('track.trackCrud',compact('data'));
    }

    public function trackCrudDel(Request $request){
        $id=$request->DelId;
        $delete=track_course::where('id',$id)->delete();
        return redirect()->back();

    }

    public function trackCrudUpdate(Request $request){
        $tracks=track::get();
        $id=$request->UpdateId;
        $info=track_course::with('tracks')->where('id',$id)->first();
        return view('track.trackCrudUpdate',compact(['info','tracks']));
    }
    public function trackCrudUpdateRequest(Request $request){
        $id=$request->id;
        $course=$request->course;
        $track=$request->track;
        $update=track_course::where('id',$id)->update([
            'track'=>$course,
            'track_id'=>$track]);
        return redirect()->back();



    }
}
