<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller{
  public function index(){
    $appointment = DB::table('appointments')
    ->join('candidates','appointments.candidateId','=','candidates.candidateId')
    ->join('appointmentstype','appointments.appointmentsTypeId','=','appointmentstype.appointmentsTypeId')
    ->get();

    $appointmentInfo = DB::table('appointmentstype')->get();
    $candidates = DB::table('candidates')
    ->select('candidateId','name','surname')
    ->orderby('name')
    ->get();

    return view('index',
    ['appointment'=>$appointment,
    'detail'=>$appointmentInfo,
    'candidates'=>$candidates
  ]);
  }

  public function editApm(Request $request, $id){
    $apm = DB::table('appointments')
    ->join('candidates','appointments.candidateId','=','candidates.candidateId')
    ->where('appointments.appointmentId',$id)->first();

    $candidates = DB::table('candidates')
    ->select('candidateId','name','surname')
    ->orderby('name')
    ->get();

    $appointmentInfo = DB::table('appointmentstype')->get();

    return view('editApm', ['apm'=>$apm, 'candidates'=>$candidates, 'apminfo'=>$appointmentInfo]);
  }
}
