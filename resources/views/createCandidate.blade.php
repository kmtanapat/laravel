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
                <option>---</option>
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
                <option>---</option>
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
            <b>Salary:</b>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Position:</label>
              <input type="text" id="" name="posName" value="" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Expected:</label>
              <input type="number" name="exSalary" class="form-control">
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label>  Current:</label>
              <input type="number" name="curSalary" class="form-control">
            </div>
          </div>
        </div>

        <div style="text-align:center">
          <input type="submit" name="del" value="Delete" class="btn btn-danger">
          <input type="submit" class="btn btn-success" value="Update">
        </div>
      </form>
      <?php
    }else{
      ?>
      <h1>Add Candidate Data</h1>
      <form action="save">
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
                <option>---</option>
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
              <label for="status">Status: </label>
              <select class="form-control" id="gender" name="statusId" required>
                <option>---</option>
                @foreach ($status as $s)
                <option value="{{$s->statusId}}">{{$s->statusName}}</option>
                @endforeach

              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          Remark:
          <textarea name="remark" class="form-control"></textarea>
        </div>
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

</body>
</html>
