<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller{
  public function index(){
    $tests = DB::table('tests')->get();

    return view('test', ['tests' => $tests]);
  }

  public function addTest(){
    return view('addTest');
  }

  public function create(){
    DB::table('tests')->insert(
      ['testName'=>$_GET['testName'],
      'description'=>$_GET['description']]
    );

    return redirect()->action('TestController@index');
  }

  public function view(Request $request, $id){
    $test = DB::table('tests')->where('testId', $id)->first();

    return view('addTest', ['test'=>$test]);
  }

  public function update(Request $request, $id){
    $test = DB::table('tests')->where('testId', $id)->first();

    return view('addTest', ['test'=>$test]);
  }


}
