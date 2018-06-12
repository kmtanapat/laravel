<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel='stylesheet' href='{{ URL::asset('fullcalendar/fullcalendar.css') }}' />

</head>
<body>
  @include('navbar')

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div id='calendar'></div>
      </div>
      <div class="col-sm-4">
        <h1>Details</h1>
        @foreach($detail as $d)
        <p><span class="badge" style="background-color:{{$d->appointmentColor}}">{{$d->appointmentName}}</span></p>
        @endforeach
        <button class="btn btn-info" data-toggle="modal" data-target="#appointment">Add Appointment</button>
      </div>
    </div>
  </div>

  <div class="modal fade bd-example-modal-lg" id="appointment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/newApm">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label>Select Candidate:</label>
                <select class="form-control" required name="cid">
                  <option>--</option>
                  @if(isset($candidates))
                    @foreach($candidates as $c)
                      <option value="{{$c->candidateId}}">{{$c->name}} {{$c->surname}}</option>
                    @endforeach
                  @endif
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label>Type:</label>
                <select class="form-control" required name="type">
                  <option>--</option>
                  @if(isset($detail))
                    @foreach($detail as $d)
                      <option value="{{$d->appointmentsTypeId}}">{{$d->appointmentName}}</option>
                    @endforeach
                  @endif
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label>From: </label>
                <input type="datetime-local" name="from" class="form-control">
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label>To: </label>
                <input type="datetime-local" name="to" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
            <label>Remark: </label>
            <textarea class="form-control" name="remark"></textarea>
          </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src='{{ URL::asset('fullcalendar/lib/moment.min.js') }}'></script>
  <script src='{{ URL::asset('fullcalendar/fullcalendar.js') }}'></script>
  <script>
  $(function() {
    $('#calendar').fullCalendar({
      dayClick: function(date, jsEvent, view) {
        if(view.name == 'month' || view.name == 'basicWeek') {
          $('#calendar').fullCalendar('changeView', 'agendaDay');
          $('#calendar').fullCalendar('gotoDate', date);
        }
      },
      themeSystem: 'bootstrap4',
      header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay listMonth'
        },
      events:[
        @foreach($appointment as $a)
        {
          title: '{{$a->name}} {{$a->surname}}',
          start: '{{$a->dateStart}}',
          end: '{{$a->dateEnd}}',
          backgroundColor : '{{$a->appointmentColor}}'
        },
        @endforeach
      ]
    });
  });
  </script>

</body>
</html>
