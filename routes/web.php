<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');




Route::get('/',function (){

    $data=[];
    $data['name1']='ahmedali';
    $data['name2']='ahmedali';
    return view('welcome',$data);//->with(['name1'=>'ahmed','name2'=>'ali']);
});
Route::get('index',[SecondController::class,'ahme']);


Route::resource('new',NewsController::class );

//Route::get('news', 'NewsController@show');
Route::post('news', [NewsController::class, 'store']);
Route::get('news/create', [NewsController::class, 'create']);
Route::get('news/{id}/edit', [NewsController::class, 'edit']);
Route::post('update/{id}', [NewsController::class, 'update']);
Route::delete('news/{id}', [NewsController::class, 'delete']);

///////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['namespace'=>'Admin'],function () {

    Route::get('data', [SecondController::class, 'data']);
    Route::get('data1', [SecondController::class, 'data1']);
        Route::get('ahmed', [SecondController::class, 'ahmed']);
    Route::get('data3', [SecondController::class, 'data3']);

});


//Route::get('lodin',function (){
//    return 'must Br login to access this route';
//})->name('login');

Route::get('landing',function (){
    return view('landing');
});

Route::get('about',function (){
    return view('about');
});

