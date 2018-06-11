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

}
