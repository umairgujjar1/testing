<?php

use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UmairController;
use  App\Http\Controllers\PhotoController;
use App\Models\Bscs;
use App\Models\student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// for redirect
// Route::get('/', function () {
//     return redirect("contact");
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// // Route::view("about",'/about');

// Route::get('/demo', function (){
//     echo "hello demo";
// });
// route::get('/g', function(){
//     echo "g";
// });
// route::get('/test',function(){
//     return view('test');
// });
// // route::post('/u', function(){
// //     echo "using post method";
// // });
// route::any('/u', function(){
//     echo "using post method";
// });

// // route::get('/umair/{name}',function($name){
// //     echo $name;
// // });
// route::get('/umair/{name}/{id?}',function($name,$id=null){

//     // echo $name ." ";
//     // echo $id;
// $data=compact('name','id');
// return view('about')->with($data);

// });



// route::get('/{name?}', function($name=null){
//     $demo="<h1>ITS  DEMO  </h1>";
//     $data =compact('name','demo');
//     return view('home') ->with($data);

// });

// route::get('/about',function(){

//     return view('layout.about');
// });
// route::get('/',function(){

//     return view('layout.home');
// });


// Route::get('/home', function () {
// return view('home');
// })->name('home');
// Route::get('/about', function () {
// return view('about');

// })->name('about');
// Route::get('/contact', function () {
// return view('contact');

// })->name('contact');

// route::get('/index',[UmairController::class,'index']);
// route::get('/abot',[UmairController::class,'about']);

// route::get('/contct',SingleActionController::class);






// route::resource('student-profile',PhotoController::class);

// route::get('/uu/{name}',[UmairController::class,'add']);


// route::get('/profile/{name?}',[UmairController::class,'show']);
// Route::get('/', function () {
// return view('layout.home');
// });
// route::resource('umair',PhotoController::class);

route::get('/',function(){
    return view('crud.home');
})->name('home');
route::get('/register',[UmairController::class,'index']);
route::post('/register',[UmairController::class,'register'])->name('register');
route::get('/register/view',[UmairController::class,'view'])->name('view');
route::get('/view/delete/{id}',[UmairController::class,'delete']);
route::get('/view/edit/{id}',[UmairController::class,'edit']);
route::post('/view/edit/{id}',[UmairController::class,'update']);

// route::get('/bscs',function(){
//     $umair=student::all();
//     echo "<pre>";
//     print_r($umair->toArray());

// });

