<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
    <h1>User List</h1>
    @if(isset($message))
    <div class="alert alert-success" role="alert">
      {{$message}}
    </div>
    @endif
    <p>
      <a href="/createApm" class="btn btn-success">Create New User</a>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
