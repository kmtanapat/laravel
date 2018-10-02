<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  @include('navbar')
  <div class="container">
    <h1>All Customers</h1>

    <?php
    if(isset($text)){
      ?>
      <div class="alert alert-success" role="alert">
        {{$text}}
      </div>
      <?php
    }
    ?>

    <form class="form-inline form-group mb-2" action="/search">
      Search:&nbsp;
        <input list="search"name="search" placeholder="name or surname">
        <datalist id="search">
            @foreach ($candidates as $candi)
                <option value="{{$candi->name}}"></option>
                <option value="{{$candi->surname}}"></option>
            @endforeach
        </datalist>
        <input type="submit" value="search" class="btn btn-success">
    </form>
    <br>
    <div>
      <a class="btn btn-success" href="/createCustomer">New Customer</a>
    </div>
    <br>
    <table class="table table-hover table-bordered" style="width:100%">
      <thead class="thead-light">
        <tr>
          <th style="width:80px" ></th>
          <th>ID</th>
          <th>ชื่อ</th>
          <th>บริษัท</th>
          <th>ประเภทกิจการ</th>
          <th>จังหวัด</th>
          <th>เขต</th>
          <th>เบอร์ติดต่อ</th>
          <th>ผู้ดูแล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>1</td>
          <td>ประเสริฐ จิระอนันต์</td>
          <td>จิรานันตรา จำกัด(มหาชน)</td>
          <td>การท่องเที่ยวและการโรงแรม</td>
          <td>กรุงเทพ</td>
          <td>พระนคร</td>
          <td>083-4445555</td>
          <td>baracObama</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>2</td>
          <td>ริต้า สกีเตอร์</td>
          <td>ห้างหุ้นส่วนจำกัด เดลี่พรอเฟ็ต</td>
          <td>สื่อสิ่งพิมพ์</td>
          <td>กรุงเทพ</td>
          <td>ดุสิต</td>
          <td>083-4777755</td>
          <td>baracObama</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>3</td>
          <td>มิตสึมาสะ อิเคดะ</td>
          <td>P&I Engineering</td>
          <td>ซอฟต์แวร์เฮาส์</td>
          <td>กรุงเทพ</td>
          <td>สีลม</td>
          <td>083-4777755</td>
          <td>baracObama</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>4</td>
          <td>อรุณา กุลชาติ</td>
          <td>เปเปอร์ฟลาย จำกัด</td>
          <td>สื่อสิ่งพิมพ์</td>
          <td>ขอนแก่น</td>
          <td>แวงใหญ่</td>
          <td>083-8444455</td>
          <td>arielTheMermaid</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>5</td>
          <td>ชาร์ลอตต์ ปาล์มเมอร์</td>
          <td>Palmer Company Limited.,</td>
          <td>ซอฟต์แวร์เฮาส์</td>
          <td>สมุทรปราการ</td>
          <td>บางบ่อ</td>
          <td>083-8444455</td>
          <td>lnwclaudia</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>6</td>
          <td>วริศรา พิชัยเชตต์</td>
          <td>มาริโน่แอนด์เฟรนด์</td>
          <td>ร้านอาหาร</td>
          <td>ขอนแก่น</td>
          <td>ภูผาม่าน</td>
          <td>083-8444455</td>
          <td>arielTheMermaid</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>7</td>
          <td>กรกันต์ พัฒนเลิศ</td>
          <td>กรซีฟู้ด</td>
          <td>ร้านอาหาร</td>
          <td>สมุทรปราการ</td>
          <td>บางพลี</td>
          <td>083-33620222</td>
          <td>lnwclaudia</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>8</td>
          <td>ธราธร แซ่จาง</td>
          <td>ธนาคารทรัพย์จาง</td>
          <td>การเงินและธนาคาร</td>
          <td>สุรินทร์</td>
          <td>พนมดงรัก</td>
          <td>083-33620222</td>
          <td>apisit1234</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>9</td>
          <td>มอร์ริส หยาง</td>
          <td>Yang Mechanical Company Limited</td>
          <td>สิ่งก่อสร้าง</td>
          <td>กรุงเทพมหานคร</td>
          <td>บางขุนเทียน</td>
          <td>083-33620222</td>
          <td>baracObama</td>
        </tr>
        <tr>
          <td align="center">
            <i class="fas fa-edit"></i> &nbsp;
            <i class="fas fa-trash-alt"></i>
          </td>
          <td>10</td>
          <td>พิชญา คาร์ลสัน</td>
          <td>Moana Ship Transportaion</td>
          <td>การขนส่งและโลจิสติกส์</td>
          <td>กรุงเทพมหานคร</td>
          <td>ห้วยขวาง</td>
          <td>083-7766633</td>
          <td>baracObama</td>
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
