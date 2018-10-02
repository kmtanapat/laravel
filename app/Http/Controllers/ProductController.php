<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    return view('indexProduct');
  }

  public function createProduct(){
    return view('registerProduct');
  }


  public function create(){
    DB::table('status')->insert(
      ['statusName'=>$_GET['name'],
      'description'=>$_GET['description']]
    );

    $sql = "SELECT s.statusId, s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
    $status = DB::select($sql);
    return view('status', ['status' => $status, 'text'=>"Create Successful"]);
  }

  public function edit(Request $request, $id){
    $data = DB::table('status')->where('statusId','=',$id)->first();
    return view('newStatus', ['status'=>$data]);
  }

  public function update(Request $request, $id){
    DB::table('status')
    ->where('statusId',$id)
    ->update(
      ['statusName' =>$_GET["name"],
      'description' =>$_GET["description"]]
    );
    $sql = "SELECT s.statusId, s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
    $status = DB::select($sql);
    return view('status', ['status' => $status, 'text'=>"Update Completed!"]);
  }

  public function delete(Request $request, $id){
    $candi = DB::table('candidates')->where('statusId','=',$id)->exists();
    if($candi){
      $sql = "SELECT s.statusId, s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
      $status = DB::select($sql);
      return view('status', ['status' => $status, 'text'=>'Please remove candidate from this status before delete.']);
    }else{
      DB::table('status')->where('statusId','=',$id)->delete();
      $sql = "SELECT s.statusId, s.statusName, count(c.statusId) as 'amount', s.description from status s left join candidates c on c.statusId = s.statusId group by s.statusId";
      $status = DB::select($sql);
      return view('status', ['status' => $status, 'text'=>'Status Deleted']);
    }
  }




  public function new(){
    return view('newStatus');
  }
}
