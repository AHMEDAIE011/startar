<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class SecondController extends Controller {
//    public function __construct(){
////        $this->middleware('auth')->except('ahmed');
//    }



public function ahme(){
    $data=[];
    $data['name1']='ahmedali';
    $data['name2']='mohamedali';
    $obj = new \stdClass();
    $obj->name1 ="ahmed";
    $obj->name2 ="mohamed";
    return view('welcome',compact('obj','data'));//->with(['name1'=>'ahmed','name2'=>'ali']);
    ;}

    public function data(){ return "data";}
    public function data1(){ return "data1";}
    public function ahmed(){ return "ahmed";}
    public function data3(){ return "data3";}


}
