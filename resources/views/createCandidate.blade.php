<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  @include('navbar')

  <div class="container">
    <?php
    if(isset($data)){
      ?>
      <h1>{{$data->name}} {{$data->surname}}'s Info</h1>
      <form action="/update">
        <input type="hidden" name="id" value="{{$data->candidateId}}">
        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="name">Name: </label>
              <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="surname">Surname: </label>
              <input type="text" id="surname" name="surname" value="{{$data->surname}}" class="form-control" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="dob">Date of Birth: </label>
              <input type="date" id="dob" name="dob" value="{{$data->dateOfBirth}}" class="form-control" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="gender">Gender: </label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="">---</option>
                <?php
                if($data->gender=='M'){
                  ?>
                  <option value="M" selected>Male</option>
                  <option value="F">Female</option>
                  <?php
                }else{
                  ?>
                  <option value="M">Male</option>
                  <option value="F" selected>Female</option>
                  <?php
                }
                ?>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="tel">Telephone Number: </label>
              <input type="text" id="tel" name="tel" value="{{$data->tel}}" class="form-control" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="status">Status: </label>
              <select class="form-control" id="gender" value="{{$data->statusId}}" name="statusId" required>
                <option value="">---</option>
                @foreach ($status as $s)
                @if ($s->statusId == $data->statusId)
                <option selected value="{{ $s->statusId }}">{{ $s->statusName }}</option>
                @else
                <option value="{{ $s->statusId }}">{{ $s->statusName }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          Remark:
          <textarea name="remark" class="form-control">{{$data->remark}}</textarea>
        </div>

        <br>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Position:</label>
              @if(isset($position->positionName))
              <input type="text" id="" name="posName" value="{{$position->positionName}}" class="form-control">
              @else
              <input type="text" id="" name="posName" value="" class="form-control">
              @endif
            </div>
          </div>

          <div class="col-sm">
            <div class="form-group">
              <label>Identity:</label>
              <select class="form-control" id="identityid" value="{{$data->identityid}}" name="identityid" required>
                @foreach ($identity as $s)
                  @if ($s->identityid == $data->identityid)
                    <option selected value="{{ $s->identityid }}">{{ $s->identityname }}</option>
                  @else
                    <option value="{{ $s->identityid }}">{{ $s->identityname }}</option>
                  @endif
              @endforeach
            </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Current Salary:</label>
              @if(isset($position->currentSalary))
              <input type="number" name="curSalary" class="form-control" value="{{$position->currentSalary}}">
              @else
                <input type="number" name="curSalary" class="form-control" value="">
              @endif
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>Expected Salary:</label>
              @if(isset($position->expectedSalary))
              <input type="number" name="exSalary" class="form-control" value="{{$position->expectedSalary}}">
              @else
              <input type="number" name="exSalary" class="form-control" value="">
              @endif
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <b>Test:</b>
          </div>
        </div>

        @foreach($candiScore as $cs)
        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Test Name:</label>
              <select class="form-control" name="testname[]" >
                <option value="">--</option>
                @foreach($test as $t)
                @if ($t->testId == $cs->testId)
                <option value="{{$t->testId}}" selected>{{$t->testName}}</option>
                @else
                <option value="{{$t->testId}}">{{$t->testName}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>Score:</label>
              <input required type="number" name="score[]" class="form-control" value="{{$cs->score}}">
            </div>
          </div>
        </div>
        @endforeach
        <div id="moreScore">
        </div>
        <button type="button" id="add" class="btn btn-outline-success">+</button>
        <button type="button" id="del" class="btn btn-outline-danger" >-</button>

        <div style="text-align:center">
          <input type="submit" name="del" value="Delete" class="btn btn-danger">
          <input type="submit" class="btn btn-success" value="Update">
        </div>
      </form>
      <?php
    }else{
      ?>
      <h1>Add Customer Data</h1>
      <form action="/save">
        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="name">Name: </label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="surname">Surname: </label>
              <input type="text" id="surname" name="surname" class="form-control" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="dob">Date of Birth: </label>
              <input type="date" id="dob" name="dob" class="form-control" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="gender">Gender: </label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="">---</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="tel">Telephone Number: </label>
              <input type="text" id="tel" name="tel" class="form-control" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="status">Email: </label>
              <input type="text" id="email" name="email" class="form-control" required>
            </div>
          </div>
        </div>

        <div class="form-group">
          Address:
          <textarea name="address" class="form-control"></textarea>
        </div>
        <br>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Position:</label>
              <input type="text" id="" name="posName" class="form-control">
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>Identity:</label>
              <select class="form-control" name="identityid" >
                @foreach($identity as $i)
                  <option value="{{$i->identityid}}">{{$i->identityname}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Current Salary:</label>
              <input type="number" name="curSalary" class="form-control" >
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>Expected Salary:</label>
              <input type="number" name="exSalary" class="form-control">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <b>Test:</b>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Test Name:</label>
              <select class="form-control" name="testname[]" >
                <option value="">--</option>
                @foreach($test as $t)
                <option value="{{$t->testId}}">{{$t->testName}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>Score:</label>
              <input type="number" name="score[]" class="form-control">
            </div>
          </div>
        </div>
        <div id="moreScore">
        </div>
        <button type="button" id="add" class="btn btn-outline-success">+</button>
        <button type="button" id="del" class="btn btn-outline-danger" >-</button>

        <div style="text-align:center">
          <input type="submit" class="btn btn-success" value="Save">
        </div>
      </form>
      <?php
    }
    ?>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function(){
    var count = 0;
    $("#add").click(function(){
      count++;
      var scoreSelect = '<div class="row" id="s'+count+'">'+
      '<div class="col-sm">'+
      '<div class="form-group">'+
      '<label>Test Name:</label>'+
      '<select class="form-control" name="testname[]" >'+
      '<option value="">--</option>'+
      @foreach($test as $t)
      '<option value="{{$t->testId}}">{{$t->testName}}</option>'+
      @endforeach
      '</select>'+
      '</div>'+
      '</div>'+
      '<div class="col-sm">'+
      '<div class="form-group">'+
      '<label>Score:</label>'+
      '<input required type="number" name="score[]" class="form-control">'+
      '</div>'+
      '</div>'+
      '</div>';
      $("#moreScore").append(scoreSelect);
    });
    $("#del").click(function(){
      $("#s"+count).remove();
      count--;
    });
  });
  </script>
</body>
</html>
