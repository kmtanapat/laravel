<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')

<div class="container">
    <h1>Create Product Data</h1>
    <form action="/save">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="name">Product Name </label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="surname">NGLI </label>
                    <input type="number" id="surname" name="surname" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">Thickener </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="status">Service Temperature </label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">Viscosity Range </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">Quantity </label>
                    <input type="number" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">Details </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </form>
</div>
</body>
</html>
