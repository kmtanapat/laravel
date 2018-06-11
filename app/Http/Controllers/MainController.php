<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller{
  public function index(){
    $appointment = DB::table('appointments')
    ->join('candidates','appointments.candidateId','=','candidates.candidateId')
    ->join('appointmentstype','appointments.appointmentsTypeId','=','appointmentsType.appointmentsTypeId')
    ->get();

    $appointmentInfo = DB::table('appointmentsType')->get();

    return view('index', ['appointment'=>$appointment, 'detail'=>$appointmentInfo]);
  }
}
