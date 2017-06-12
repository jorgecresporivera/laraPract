<?php

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

/*Route::get('/', function () {

    $phpTeam = [
        'Johnatan',
        'Dereek',
        'Jorge'
    ];
    $students = DB::table('students')->get();
                            //query builder^
    return view('welcome', compact('phpTeam'),compact('students'));
    
});*/

use App\Students;

//controler // establecer la ruta para el controller
Route::get('/students','StudentController@index');
Route::get('/students/{student}','StudentController@show');

Route::get('/', function () {
    $phpTeam = [
        'Johnatan',
        'Dereek',
        'Jorge'
    ];
    $students=false;
    return view('welcome', compact('phpTeam'),compact('students'));
});
Route::get('/account', function () {
    $students = DB::table('students')->get();
                            //query builder^
      $phpTeam = [];
    return view('welcome',compact('phpTeam'),compact('students'));
});

/* tengo un subtituto en el StudentController 
Route::get('/students', function () {
    $students = Students::get();
             //query builder^
    return view('students',compact('students'));
});*/



/*Route::get('/student/{stud}', function ($id) {
    $students = DB::table('students')->find($id);
                            //query builder^
    dd($students)
   // return view('welcome', compact('students'));
    
});*/
Route::get('/about', function () {
    return view('about');
});
/*
Route::get('/students/{student}', function ($id) {
     $student = DB::table('students')->find($id);
     dd($student);
    return view('welcome',compact('students'));
});*/

//-----------------------------------------------------POST----------------------------------------
Route::get('/post','PostController@index');
Route::get('/post/{post}','PostController@show');
//controller        => PostController
//Eloquent model    => Post
//migration         => create_posts_table
