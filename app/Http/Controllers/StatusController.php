<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
      $sql = "SELECT s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
      $status = DB::select($sql);
      return view('status', ['status' => $status]);
    }



    public function create(){
      DB::table('status')->insert(
        ['statusName'=>$_GET['name'],
      'description'=>$_GET['description']]
      );

      $sql = "SELECT s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
      $status = DB::select($sql);
      return view('status', ['status' => $status, 'text'=>"Create Successful"]);
    }







    public function new(){
      return view('newStatus');
    }
}
