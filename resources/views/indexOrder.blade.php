<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')
<div class="container">
    <h1>Orderlist list </h1>
    @if(isset($message))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif
    <p>
        <a href="/createApm" class="btn btn-success">Create Orders</a>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
