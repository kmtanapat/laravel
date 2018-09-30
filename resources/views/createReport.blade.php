<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')

<div class="container">
    <h1>Create Report Data</h1>
    <h2>ที่อยู่โรงงาน</h2>
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
                    <label for="surname">Company business </label>
                    <input type="text" id="surname" name="surname" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">ทีอยู่โรงงาน: </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="status">ซอย: </label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">หมู่ </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">ถนน </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">แขวง/ตำบล </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="status">เขตอำเภอ </label>
                    <select class="form-control" name="identityid" >
                        <option value="1">คลองสาน</option>
                    </select>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">จังหวัด </label>
                    <select class="form-control" name="identityid" >
                        <option value="1">กรุงเทพ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tel">รหัสไปรษณีย์ </label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="status">โทร </label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="status">แฟค </label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <h2>ที่อยู่สำนักงาน</h2>
        <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="name">ที่อยู่สำนักงาน </label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="surname">Company business </label>
                        <input type="text" id="surname" name="surname" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">ที่อยู่สำนักงาน: </label>
                        <input type="text" id="tel" name="tel" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="status">ซอย: </label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">หมู่ </label>
                        <input type="text" id="tel" name="tel" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">ถนน </label>
                        <input type="text" id="tel" name="tel" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">แขวง/ตำบล </label>
                        <input type="text" id="tel" name="tel" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="status">เขตอำเภอ </label>
                        <select class="form-control" name="identityid" >
                            <option value="1">คลองสาน</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">จังหวัด </label>
                        <select class="form-control" name="identityid" >
                            <option value="1">กรุงเทพ</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="tel">รหัสไปษณีย์ </label>
                        <input type="text" id="tel" name="tel" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="status">โทร </label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="status">แฟค </label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
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
                    <label>ผู้ติดต่อ</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>แผนก</label>
                    <input type="number" name="score[]" class="form-control">
                </div>
            </div>
        </div>
        <div id="moreScore">
        </div>
        <button type="button" id="add" class="btn btn-outline-success">+</button>
        <button type="button" id="del" class="btn btn-outline-danger" >-</button>

        <br>
        <br>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>เริ่มติดต่อได้อย่างไร</label>
                    <input type="text" id="" name="posName" class="form-control">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>เวลาที่อยู่ประจำ</label>
                    <input type="number" name="curSalary" class="form-control" >
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>ระยะเวลาการเข้าเยี่ยม(ชม.)</label>
                    <input type="number" name="exSalary" class="form-control">
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>ผลิตภัณฑ์ที่แนะนำ</label>
                    <select class="form-control" name="testname[]" >
                        <option value="">--</option>
                        @foreach($test as $t)
                            <option value="{{$t->testId}}">{{$t->testName}}</option>
                        @endforeach
                    </select>
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
                    <label>วันเดือนปี</label>
                    <input type="date" name="curSalary" class="form-control" >
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>บุคคลที่ติดต่อ</label>
                    <input type="text" name="exSalary" class="form-control">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>สินค้าที่เสนอ</label>
                    <input type="text" name="exSalary" class="form-control">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>รายละเอียด</label>
                    <input type="text" name="exSalary" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>รายละเอียด</label>
                    <textarea  name="exSalary" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            <input type="submit" class="btn btn-success" value="Save">
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
