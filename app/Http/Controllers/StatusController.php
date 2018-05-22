<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
      $sql = "SELECT s.statusName, sum(c.statusId) as 'amount', s.description from candidates c join status s on c.statusId = s.statusId group by c.statusId";
      $status = DB::select($sql);
      return view('status', ['status' => $status]);
    }

    public function new(){
      return view('newStatus');
    }
}
