<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')

<div class="container">
    <h1>Create Order Data</h1>
    <form action="/save">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="name">Order Num </label>
                    <input type="text" id="name" name="name" value="Ha002" class="form-control" required readonly>
                </div>
            </div>
            <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="surname">Product </label>
                    <select class="form-control" name="testname[]" >
                        <option value="">Please select</option>
                    </select>
                </div>
            </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="status">Quantity </label>
                        <input type="number" id="email" name="email" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        <div id="moreScore">
        </div>
        <button type="button" id="add" class="btn btn-outline-success">+</button>
        <button type="button" id="del" class="btn btn-outline-danger" >-</button>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">Company </label>
                    <select class="form-control" name="testname[]" >
                        <option value="">Please select</option>
                    </select>
                </div>
            </div>
    </form>
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
                '<option value="">--</option>'+
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
