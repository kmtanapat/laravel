<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function index(){
    return view('indexReport');
  }

  public function createReport(){
    return view('createReport');
  }

}
