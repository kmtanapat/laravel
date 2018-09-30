<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
      $sql = 'SELECT c.*, s.statusName as statusN,i.identityid as identityid,i.identityname as iden  ,p.positionName as position '.
          'FROM candidates c '.
          'JOIN status s ON s.statusId = c.statusId '.
          'LEFT JOIN identity i ON i.identityid = c.identityid '.
          'LEFT JOIN positions p ON p.candidateId = c.candidateId order by c.name';
    $candidates = DB::select($sql);
    $iden = DB::table('identity')->get();
    return view('customer',['candidates' => $candidates, 'identity'=>$iden]);
  }

  public function createCustomer()
  {
    return view('createCustomer');
  }

  public function search(){
    $search =$_GET["search"];
    $sql = "SELECT c.*, s.statusName as statusN, p.positionName as position ,i.identityname as iden FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN identity i ON i.identityid = c.identityid LEFT JOIN positions p ON p.candidateId = c.candidateId WHERE name LIKE '%".$search."%' OR surname LIKE '%".$search."%' OR remark LIKE '%".$search."%'";
    $candidates = DB::select($sql);
      $iden = DB::table('identity')->get();
    return view('candidates',['candidates' => $candidates,'identity'=>$iden]);

  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(){
    $status=DB::table('status')->get();
    $test = DB::table('tests')->get();
    $iden = DB::table('identity')->get();

    return view('createCandidate', ['status' => $status, 'identity'=>$iden, 'test'=>$test]);
  }

  public function save(){
    DB::insert("INSERT INTO `candidates` (`candidateId`, `name`, `surname`, `dateOfBirth`, `gender`, `tel`, `statusId`, `identityid`, `remark`)".
    " VALUES ( NULL, :name, :surname, :dateOfBirth, :gender, :tel, :statusId, :identityid, :remark) ",
    [$_GET["name"], $_GET["surname"], $_GET["dob"], $_GET["gender"], $_GET["tel"], $_GET["statusId"], $_GET["identityid"], $_GET["remark"]]);
    $i=0;
    $id = DB::table('candidates')->orderby('candidateId','desc')->first();

    $testname = $_GET["testname"];
    $score = $_GET["score"];
    foreach (array_combine($testname, $score) as $testname=>$score) {
      DB::table('scores')->insert([
        'candidateId'=>$id->candidateId,
        'testId' =>$testname,
        'score'=>$score
      ]);
      $i++;
    }

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

    $iden = DB::table('identity')->get();
    $recent = DB::select("SELECT c.*, s.statusName as statusN, p.positionName as position,i.identityname as iden FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN identity i ON i.identityid = c.identityid LEFT JOIN positions p ON p.candidateId = c.candidateId ORDER BY candidateId DESC LIMIT 1");
    return view('candidates', ['candidates' => $recent, 'identity'=>$iden, 'text'=>"Candidate added."]);
  }

  public function sort(Request $request, $sortby, $order){
    $sql = 'SELECT c.*, s.statusName as statusN, p.positionName as position, i.identityname as iden FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN identity i ON i.identityid = c.identityid LEFT JOIN positions p ON p.candidateId = c.candidateId ORDER BY '.$sortby.' '.$order;
    $candidates = DB::select($sql);
    $iden = DB::table('identity')->get();
      return view('candidates',
    ['candidates' => $candidates,
    'order'=>$order, 'identity'=>$iden]
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
  $data=DB::table('candidates')->where('candidateId', $id)
      ->join('identity', 'candidates.identityid', '=', 'identity.identityid')
      ->select('candidates.*', 'identity.identityname')
      ->first();
  $test = DB::table('tests')->get();
  $candiScore = DB::table('scores')->where('candidateId', $id)->get();

  $iden = DB::table('identity')->get();

  return view('createCandidate',[
    'data'=>$data,
    'test'=>$test,
    'status' => $status,
    'position'=>$position,
    'identity'=>$iden,
    'candiScore'=>$candiScore
  ]);
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
    $sql = 'SELECT c.*, s.statusName as statusN ,i.identityname as iden FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN identity i ON i.identityid = c.identityid';
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
      'identityid'=>$_GET["identityid"],
      'remark'=>$_GET["remark"]]
    );

    if(isset($_GET["testname"])){
      if($_GET["testname"]!="" && $_GET["score"]!=""){
        $testname = $_GET["testname"];
        $score = $_GET["score"];
        DB::table('scores')
        ->where('candidateId', $_GET["id"])
        ->delete();
        foreach (array_combine($testname, $score) as $testname=>$score) {
          if($testname!=""){
            DB::table('scores')->insert([
              'candidateId'=>$_GET["id"],
              'testId' =>$testname,
              'score'=>$score
            ]);
          }
        }
      }
    }

    $recent = DB::select("SELECT c.*, s.statusName as statusN, p.positionName as position,i.identityname as iden FROM candidates c JOIN status s ON s.statusId = c.statusId LEFT JOIN identity i ON i.identityid = c.identityid LEFT JOIN positions p ON p.candidateId = c.candidateId WHERE c.candidateId = ".$_GET["id"]);
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
