<?php

use App\Http\Controllers\logCtrl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::prefix('grade')->group(function (){
    route::get('/',[\App\Http\Controllers\gradeCtrl::class,'gradeView']);
    route::post('/',[\App\Http\Controllers\gradeCtrl::class,'storeGrade'])->name('storeGrade');

    route::get('gradeCourse',[\App\Http\Controllers\gradeCtrl::class,'gradeCourseView'])->name('gradeCourse');
    route::post('storeGradeCourse',[\App\Http\Controllers\gradeCtrl::class,'addGradeCourse'])->name('addGradeCourse');

    route::get('gradeCrud',[\App\Http\Controllers\gradeCtrl::class,'gradeCrudRead'])->name('gradeCrudRead');
    route::post('gradeCrudDel',[\App\Http\Controllers\gradeCtrl::class,'gradeCrudDel'])->name('gradeCrudDel');

    route::get('gradeCrudUpdate',[\App\Http\Controllers\gradeCtrl::class,'gradeCrudUpdate'])->name('gradeCrudUpdate');
    route::post('gradeCrudUpdate',[\App\Http\Controllers\gradeCtrl::class,'gradeCrudUpdateRequest'])->name('gradeCrudUpdateRequest');




});

route::prefix('track')->group(function (){
    route::get('/',[\App\Http\Controllers\trackCtrl::class,'trackView'])->name('insertTrack');
    route::post('/',[\App\Http\Controllers\trackCtrl::class,'storeTrack'])->name('storeTrack');


    route::get('trackCourse',[\App\Http\Controllers\trackCtrl::class,'trackCourseView'])->name('trackCourse');
    route::post('storeTrackCourse',[\App\Http\Controllers\trackCtrl::class,'addTrackCourse'])->name('addTrackCourse');

    route::get('trackCrud',[\App\Http\Controllers\trackCtrl::class,'trackCrudRead'])->name('trackCrudRead');
    route::post('trackCrudDel',[\App\Http\Controllers\trackCtrl::class,'trackCrudDel'])->name('trackCrudDel');

    route::get('trackCrudUpdate',[\App\Http\Controllers\trackCtrl::class,'trackCrudUpdate'])->name('trackCrudUpdate');
    route::post('trackCrudUpdate',[\App\Http\Controllers\trackCtrl::class,'trackCrudUpdateRequest'])->name('trackCrudUpdateRequest');
});

route::prefix('login')->group(function (){
    route::get('/',[logCtrl::class,'login'])->name('login');
    route::post('/loginRequest',[logCtrl::class,'loginRequest'])->name('loginRequest');


});

route::prefix('register')->group(function (){
    route::get('/',[logCtrl::class,'register'])->name('register');
    route::post('/registerRequest',[logCtrl::class,'registerRequest'])->name('registerRequest');


});


route::prefix('/home')->group(function (){
    route::get('/',[logCtrl::class,'home'])->name('home');
});

route::get('/test',[logCtrl::class,'test'])->name('test');
