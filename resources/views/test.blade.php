<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
  <h1>All Tests</h1>
  @if(isset($message))
  <div class="alert alert-success" role="alert">
{{$message}}
</div>
  @endif
  <div>
    <a class="btn btn-success" href="/addTest">New Test</a>
  </div>
  <br>
    <table class="table table-hover table-bordered">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Test Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <?php $x = 1; ?>
    @foreach($tests as $t)
      <tr>
        <td>{{$x++}}</td>
        <td>
          <a href="/showTest/{{$t->testId}}" >{{$t->testName}} </a>
        </td>
        <td>{{$t->description}}</td>
      </tr>
    @endforeach
</table>
</div>
  </body>
</html>
