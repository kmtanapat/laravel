<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  @include('navbar')
  <div class="container">
    <h1>All Candidates</h1>

    <?php
    if(isset($text)){
      ?>
      <div class="alert alert-success" role="alert">
        {{$text}}
      </div>
      <?php
    }
    ?>

    <form class="form-inline form-group mb-2" action="search">
      Search:&nbsp;
      <input type="text" name="search" class="form-control" placeholder="name, surname or remark">&nbsp;
      <input type="submit" value="search" class="btn btn-success">
    </form>

    <table class="table table-hover table-bordered" style="width:100%">
      <thead class="thead-light">
        <tr>
          <?php
          if(isset($order) && $order == 'ASC'){
            ?>
            <th scope="col"><a href="/sort/name/DESC">Name</a></th>
            <th scope="col"><a href="/sort/surname/DESC">Surname</a></th>
            <th scope="col">Gender</th>
            <th scope="col">Tel</th>
            <th scope="col">Birthday</th>
            <th scope="col"><a href="/sort/statusId/DESC">Status</a></th>
            <th scope="col">Position</th>
            <th scope="col">Remark</th>
            <?php
          }else{
            ?>
            <th scope="col"><a href="/sort/name/ASC">Name</a></th>
            <th scope="col"><a href="/sort/surname/ASC">Surname</a></th>
            <th scope="col">Gender</th>
            <th scope="col">Tel</th>
            <th scope="col">Birthday</th>
            <th scope="col"><a href="/sort/statusId/ASC">Status</a></th>
            <th scope="col">Position</th>
            <th scope="col">Remark</th>
            <?php
          }
          ?>
        </tr>
      </thead>
      @foreach ($candidates as $candi)
      <?php $year =  date('Y', strtotime($candi->dateOfBirth));?>
      <tr>
        <td><a href="/show/{{$candi->candidateId}}">{{ $candi->name }}</a></td>
        <td>{{ $candi->surname }}</td>
        <td>{{ $candi->gender }}</td>
        <td>{{ $candi->tel }}</td>
        <td>{{ $candi->dateOfBirth }} <br> ({{date("Y")-$year}} years old) </td>
        <td>{{ $candi->statusN }}</td>
        <td>{{ $candi->position }}</td>
        <td>{{ $candi->remark }}</td>
      </tr>
      @endforeach
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>
