<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
    return view('user');
  }

  public function createUser(){
    return view('createUser');
  }

  public function save(){
    DB::table('appointmentstype')->insert([
      'appointmentName'=>$_GET["name"],
      'appointmentColor' =>$_GET["color"]

    ]);
    $apm = DB::table('appointmentstype')->get();
    return view('appointmentstype', ['apm' => $apm, 'message'=>"Appointment Created"]);
  }

  public function delete(Request $request, $id){
    DB::table('appointmentstype')->where('appointmentsTypeId', $id)->delete();
    $apm = DB::table('appointmentstype')->get();
    return view('appointmentstype', ['apm' => $apm, 'message'=>"Appointment Deleted"]);
  }

  public function edit(Request $request, $id){
    $apm = DB::table('appointmentstype')->where('appointmentsTypeId', $id)->first();
    return view('createApm', ['apm'=>$apm]);
  }

  public function update(Request $request, $id){
    DB::table('appointmentstype')
    ->where('appointmentsTypeId', $id)
    ->update([
      'appointmentName'=>$_GET["name"],
      'appointmentColor'=>$_GET["color"]
    ]);
    $apm = DB::table('appointmentstype')->get();
    return view('appointmentstype', ['apm' => $apm, 'message'=>"Appointment Updated"]);
  }

  public function newApm(){
    DB::table('appointments')->insert([
      'appointmentsTypeId'=>$_GET["type"],
      'candidateId'=>$_GET["cid"],
      'dateStart'=>$_GET["from"],
      'dateEnd'=>$_GET["to"]
    ]);
    //$apm = DB::table('appointmentstype')->get();
    return redirect()->action('MainController@index');
  }

}
