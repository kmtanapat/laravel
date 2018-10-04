@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Product list </h1>
    @if(isset($message))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif
    <p>
        <a href="/createProduct" class="btn btn-success">Products</a>
    </p>
    <table class="table table-hover table-bordered" style="width:100%">
        <thead class="thead-light">
        <tr>
            <th></th>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>จำนวน</th>
            <th>NLGI</th>
            <th>ประเภท</th>
            <th>ฐานน้ำมัน</th>
            <th>อุณหภูมิ</th>
            <th>รายละเอียด</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td align="center">
                <i class="far fa-file-alt"></i>
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash-alt"></i>
            </td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>Ausbond 95</td>
            <td>polyurea</td>
            <td>Mineral</td>
            <td>10-180</td>
            <td>High Temperature</td>
        </tr>
        <tr>
            <td align="center">
                <i class="far fa-file-alt"></i>
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash-alt"></i>
            </td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>Ausbond 89</td>
            <td>Inorganic</td>
            <td>Mineral</td>
            <td>15-20</td>
            <td>HighTemp</td>
        </tr>

        </tbody>
    </table>
</div>
@endsection
