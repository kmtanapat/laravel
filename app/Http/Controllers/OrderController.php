<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller{
  public function index(){
    return view('indexOrder');
  }

  public function createOrder(){
    return view('createorder');
  }

  public function addTest(){
    return view('addTest');
  }
  
  public function view(Request $request, $id){
    $test = DB::table('tests')->where('testId', $id)->first();

    return view('addTest', ['test'=>$test]);
  }

  public function delete(Request $request, $id){
    $check = DB::table('scores')
    ->where('testId',$id)
    ->exists();

    if(!$check){
      DB::table('tests')
      ->where('testId',$id)
      ->delete();
      $message="Delete successful";
    }else{
      $message="Please delete associated score first.";
    }
    $tests = DB::table('tests')->get();

    return view('test', ['tests' => $tests, 'message'=>$message]);

  }

  public function update(Request $request, $id){
    DB::table('tests')
    ->where('testId',$id)
    ->update([
      'testName' =>$_GET["testName"],
      'description' =>$_GET["description"]
    ]
  );
  $message="Successfully update";


  $tests = DB::table('tests')->get();

  return view('test', ['tests' => $tests, 'message'=>$message]);
}


}
