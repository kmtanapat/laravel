@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>User List</h1>
    @if(isset($message))
    <div class="alert alert-success" role="alert">
      {{$message}}
    </div>
    @endif
    <p>
      <a href="/createUser" class="btn btn-success">Create New User</a>
    </p>
    <table class="table table-hover table-bordered" style="width:100%">
      <thead class="thead-light">
        <tr>
          <th></th>
          <th>ID</th>
          <th>ชื่อ</th>
          <th>สถานะ</th>
          <th>จังหวัด</th>
          <th>เขต</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>1</td>
          <td>baracObama</td>
          <td>Admin</td>
          <td>กรุงเทพมหานคร</td>
          <td>สายไหม</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>2</td>
          <td>mickeyM</td>
          <td>Sales</td>
          <td>เชียงใหม่</td>
          <td>หางดง</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>3</td>
          <td>jackiechan007</td>
          <td>Sales</td>
          <td>ประจวบคีรีขันธ์</td>
          <td>ทับสะแก</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>4</td>
          <td>arielTheMermaid</td>
          <td>Sales</td>
          <td>ขอนแก่น</td>
          <td>เมือง</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>5</td>
          <td>prasertjZa007</td>
          <td>Admin</td>
          <td>กรุงเทพมหานคร</td>
          <td>พระนคร</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>6</td>
          <td>lnwclaudia</td>
          <td>Sales</td>
          <td>สมุทรปราการ</td>
          <td>ศรีราชา</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>7</td>
          <td>apisit1234</td>
          <td>Sales</td>
          <td>สุรินทร์</td>
          <td>กาบเชิง</td>
        </tr>

      </tbody>
    </table>
  </div>
@endsection
