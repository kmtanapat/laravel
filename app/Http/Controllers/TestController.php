<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller{
  public function index(){
    $tests = DB::table('tests')->get();

    return view('test', ['tests' => $tests]);
  }
}
