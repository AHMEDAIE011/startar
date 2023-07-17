<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
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

//return view('welcome');
/////////////////////////////////////////////////////////////////////////////
////////ROUTING denamek
//
//Route::view('/','welcome');
//Route::get('/',function (){
//   return view('welcome');
//});
//Route::group(['prefix'=>'pro'],function (){
//    Route::get('create',fn()=>'create project');
//    Route::get('edit/{id}',fn($id)=>'Edit project ='. $id);
//
//});


/////////////////////////////////////////////////////////////////////////////
////////ROUTING denamek
//
//Route::get('ah/{id}', function ($id) {
//    return 'Edit record id ='.$id;
//});
//
//Route::get('as/{id?}', function (string $id =null) {
//    return 'Edit record id ='.$id;
//});
//
//Route::get('ahmed/{name}', function ($name) {
//    return 'Edit record id ='.$name;
//});// RouteServiceProvider سطر رقم29  الوير المستخدمه في الراوت دا موجوده في صفحه
//
//Route::get('aa/{id}', function ( $id) {
//    return 'Edit record id ='.$id;
//})->whereNumber('id');
//
//Route::get('ad/{id}', function ($id) {
//    return 'Edit record id ='.$id;
//})->whereAlpha('id');
//Route::get('aq/{data}', function ( $data) {
//    return 'Edit record name ='.$data;
//})->whereAlphaNumeric('data');
//
//
//Route::get('aaz/{name}', function ( $name) {
//    return 'Edit record name ='.$name;
//})->whereIn('name',['book','animal']);
//
//Route::get('asd/{id}/{name}', function ($id,$name) {
//    return 'Edit record name ='.$name.' ia ='. $id ;
//})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);

/////////////////////////////////////////////////////////////////////////////
///ROUTING-> (GET & POST & put & PATCH & DELETE & any)
/// // '.csrf_field().'  _TOKEN بدل امبوت
//// name "_method" PUT  خاصه بالراوت
////  PATCH & DELETE/   PUTنفس فكره ال
//// any     تنفع تشتغل ع كله



//Route::get('/', function () {
//
// return '<form action="mydata" method="post">
//               <input type="hidden" name="_method" value="put">
//               <input type="hidden" name="_token" value="'.csrf_token().'">
//               <input type="submit" value="go">
//     </form>';
//});
//Route::put('mydata', function () {
//    return '<h1>welcome MR ahmed how are you</h1>';
//});
//
//Route::post('data', function () {
//        return '<h1>welcome MR ahmed how are you</h1>';
//});


/////////////////////////////////////////////////////////////////////////////
///ROUTING OPTIONS-> OPTIONS & MATCH
//OPTIONS ->  PUTنفس طريقه ال
//MATCH ->  شرط


//Route::get('/', function () {
//    return '<form action="a" method="post">
//               <input type="hidden" name="_method" value="opthons">
//               '.csrf_field().'
//               <input type="submit" value="go">
//     </form>';
//});
//Route::match(['opthons','get','post'],'a', function () {
//    return '<h1>welcome MR ahmed how are you</h1>';
//});
//

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
/// get /post /delete /
//Route method
//Route::get('/test1', function () {
//    return "welcome";
//});
//
//
//
///////////////////////////////////////////////////////////////////////////////
////require parameters
//
//
//Route::get('/test2/{id}', function ($id) {  //require parameters
//    return $id ;
//});
//
//Route::get('/test2/{id?}', function () {
//    return "welcome";
//});
//
//
///////////////////////////////////////////////////////////////////////////////
////require name
//
//
//Route::get('/show-number/{id}', function ($id) {  //require parameters of html ->    {{route('a',22)}}
//    return $id ;
//})->name('a');
//
//Route::get('/show-string/{id?}', function () { //require parameters of html ->    {{route('s',22)}}
//    return "welcome";
//})->name('s');
//
//
////////////////////////////////////////////////////////////////////////////////
////require namespace
//Route::namespace('Front')->group(function() {
//    Route::get('Users',[UserController::class,'ShowUserController']);
//
//});
////////////////////////////////////////////////////////////////////////////////
//////prefix
//Route::prefix('Front')->group(function() {
//
//    Route::get('show',[UserController::class,'ShowUserController']);
//    Route::delete('delete',[UserController::class,'ShowUserController']);
//    Route::get('edit',[UserController::class,'ShowUserController']);
//    Route::put('update',[UserController::class,'ShowUserController']);
//});
//
//////prefix and middleware
//Route::group(['prefix'=>'users', 'middleware'=>'auth'],function (){
//
//    Route::get('/',function (){
//       return 'work';
//    });
//
//    Route::get('show',[UserController::class,'ShowUserController']);
//    Route::delete('delete',[UserController::class,'ShowUserController']);
//    Route::get('edit',[UserController::class,'ShowUserController']);
//    Route::put('update',[UserController::class,'ShowUserController']);
//});
//
//    Route::get('check',function (){
//        return 'middleware';
//    })->middleware('auth');
//
////////////////////////////////////////////////////////////////////////////////










