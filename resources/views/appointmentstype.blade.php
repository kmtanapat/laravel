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
    <h1>Appointment</h1>
    @if(isset($message))
    <div class="alert alert-success" role="alert">
      {{$message}}
    </div>
    @endif
    <p>
      <a href="/createApm" class="btn btn-success">Add Appointment Type</a>
    </p>
    <table class="table table-hover table-bordered" style="width:100%">
      <thead class="thead-light">
        <tr>
          <th>Appointment Type</th>
          <th>Color</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($apm as $a)
        <tr>
          <td>{{$a->appointmentName}}</td>
          <td style="background-color:{{$a->appointmentColor}}">{{$a->appointmentColor}}</td>
          <td align="center">
            <a class="btn btn-danger" href="/delApm/{{$a->appointmentsTypeId}}">Delete</a>
            <a class="btn btn-info" href="/editApm/{{$a->appointmentsTypeId}}">Edit</a>
          </td>
        </tr>
        @endforeach
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
