<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
    $sql = 'SELECT c.*, s.statusName as statusN, p.positionName as position '.
    'FROM candidates c '.
    'JOIN status s ON s.statusId = c.statusId '.
    'LEFT JOIN positions p ON p.candidateId = c.candidateId';
    $candidates = DB::select($sql);
    return view('candidates',['candidates' => $candidates]);
  }

  public function search(){
    $search =$_GET["search"];
    $sql = "SELECT c.*, s.statusName as statusN, p.positionName as position FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN positions p ON p.candidateId = c.candidateId WHERE name LIKE '%".$search."%' OR surname LIKE '%".$search."%' OR remark LIKE '%".$search."%'";
    $candidates = DB::select($sql);
    return view('candidates',['candidates' => $candidates]);

  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(){
    $sql="SELECT * FROM status";
    $status=DB::select($sql);
    return view('createCandidate', ['status' => $status]);
  }

  public function save(){
    DB::insert("INSERT INTO `candidates` (`candidateId`, `name`, `surname`, `dateOfBirth`, `gender`, `tel`, `statusId`, `remark`)".
    " VALUES ( NULL, :name, :surname, :dateOfBirth, :gender, :tel, :statusId, :remark)",
    [$_GET["name"], $_GET["surname"], $_GET["dob"], $_GET["gender"], $_GET["tel"], $_GET["statusId"], $_GET["remark"]]);

    $id = DB::select("SELECT MAX(candidateId) AS candidateId FROM candidates");
    foreach ($id as $i) {
      $cid = $i->candidateId;
    }
    DB::table("positions")->insert([
      "candidateId"=>$cid,
      "positionName"=>$_GET["posName"],
      "currentSalary"=>$_GET["curSalary"],
      "expectedSalary"=>$_GET["exSalary"]
    ]);
    $recent = DB::select("SELECT c.*, s.statusName as statusN, p.positionName as position FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN positions p ON p.candidateId = c.candidateId ORDER BY candidateId DESC LIMIT 1");
    return view('candidates', ['candidates' => $recent, 'text'=>"Candidate added."]);
  }

  public function sort(Request $request, $sortby, $order){
    $sql = 'SELECT c.*, s.statusName as statusN, p.positionName as position FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN positions p ON p.candidateId = c.candidateId ORDER BY '.$sortby.' '.$order;
    $candidates = DB::select($sql);
    return view('candidates',
    ['candidates' => $candidates,
    'order'=>$order]
  );
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request){
  //
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show(Request $request, $id){
  $sql="SELECT * FROM status";
  $status=DB::select($sql);
  $position = DB::table('positions')->where('candidateId', $id)->first();
  $data=DB::table('candidates')->where('candidateId', $id)->first();

  return view('createCandidate',['data'=>$data,'status' => $status, 'position'=>$position]);
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  //
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(){
  if( isset($_GET["del"]) && $_GET["del"] == "Delete"){
    DB::table('candidates')->where('candidateId','=',$_GET["id"])->delete();
    $sql = 'SELECT c.*, s.statusName as statusN FROM candidates c JOIN status s ON s.statusId = c.statusId';
    $candidates = DB::select($sql);
    return view('candidates',['candidates' => $candidates, 'text'=>"Data deleted"]);
  }else{
    $position = DB::table('positions')->where('candidateId',$_GET["id"])->exists();
    //var_dump($position);
    if(!$position){
      DB::table('positions')
      ->insert(
        [ 'candidateId'=>$_GET["id"],
        'currentSalary'=>$_GET["curSalary"],
        'expectedSalary'=>$_GET["exSalary"],
        'positionName'=>$_GET["posName"]]
      );
    }else{
      DB::table('positions')
      ->where('candidateId',$_GET["id"])
      ->update(
        [ 'candidateId'=>$_GET["id"],
        'currentSalary'=>$_GET["curSalary"],
        'expectedSalary'=>$_GET["exSalary"],
        'positionName'=>$_GET["posName"]]
      );
    }
    DB::table('candidates')
    ->where('candidateId',$_GET["id"])
    ->update(
      ['name' =>$_GET["name"],
      'surname' =>$_GET["surname"],
      'dateOfBirth' =>$_GET["dob"],
      'gender'=> $_GET["gender"],
      'tel'=>$_GET["tel"],
      'statusId'=>$_GET["statusId"],
      'remark'=>$_GET["remark"]]
    );
    $recent = DB::select("SELECT c.*, s.statusName as statusN, p.positionName as position FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN positions p ON p.candidateId = c.candidateId WHERE c.candidateId = ".$_GET["id"]);
    return view('candidates', ['candidates' => $recent, 'text'=>"Editted Successful"]);
  }

}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
  //
}
}
