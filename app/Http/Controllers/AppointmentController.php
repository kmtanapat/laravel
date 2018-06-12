<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
  public function index(){
    //$sql = "SELECT s.statusId, s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
    $apm = DB::table('appointmentstype')->get();
    return view('appointmentstype', ['apm' => $apm]);
  }

  public function create(){
    return view('createApm');
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

}
