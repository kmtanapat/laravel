@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>Orderlist list </h1>
    @if(isset($message))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif
    <p>
        <a href="/createOrder" class="btn btn-success">Create Orders</a>
    </p>
    <table class="table table-hover table-bordered" style="width:100%">
        <thead class="thead-light">
        <tr>
            <th></th>
            <th>เลขออเดอร์</th>
            <th>รหัสสินค้า</th>
            <th>บริษัท</th>
            <th>จังหวัด</th>
            <th>จำนวน</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td align="center">
                <i class="far fa-file-alt"></i>
                <i class="fas fa-edit"></i> &nbsp;
                <i class="fas fa-trash-alt"></i>
            </td>
            <td>Ha001</td>
            <td>1</td>
            <td>จิรานันตรา จำกัด(มหาชน)</td>
            <td>กรุงเทพ</td>
            <td>5</td>
        </tr>

        </tbody>
    </table>
</div>
@endsection
