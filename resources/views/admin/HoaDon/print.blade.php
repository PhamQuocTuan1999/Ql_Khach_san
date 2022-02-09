<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hóa đơn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

body {
    margin: 0;
    padding: 0;
    background-color: #888;
    font: 12pt "Tohoma";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    overflow:hidden;
    min-height:297mm;
    padding: 2.5cm;
    margin-left:auto;
    margin-right:auto;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 237mm;
    outline: 2cm #FFEAEA solid;
}
 @page {
 size: A4;
 margin: 0;
}
button {
    width:100px;
    height: 24px;
}
.header {
    overflow:hidden;
}
.logo {
    background-color:#FFFFFF;
    text-align:left;
    float:left;
}
.company {
    padding-top:24px;
    text-transform:uppercase;
    background-color:#FFFFFF;
    text-align:right;
    float:right;
    font-size:16px;
}
.title {
    text-align:center;
    position:relative;
    color:#0000FF;
    font-size: 24px;
    top:1px;
}
.footer-left {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    float:left;
    font-size: 12px;
    bottom:1px;
}
.footer-right {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    font-size: 12px;
    float:right;
    bottom:1px;
}
/* echo "<td class=\"cotSo\">".number_format(($row->cthd_soLuong*$row->lk_gia),0,",",".")."</td>"; */

/* echo "<td class=\"cotGia\"><div id='gialk".$row->lk_ma."' name='gialk".$row->lk_ma."' value='".$row->lk_gia."'>".number_format($row->lk_gia,0,",",".")."</div></td>"; */
.TableData {
    background:#ffffff;
    font: 11px;
    width:100%;
    border-collapse:collapse;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:12px;
    border:thin solid #d3d3d3;
}
.TableData TH {
    background: rgba(0,0,255,0.1);
    text-align: center;
    font-weight: bold;
    color: #000;
    border: solid 1px #ccc;
    height: 24px;
}
.TableData TR {
    height: 24px;
    border:thin solid #d3d3d3;
}
.TableData TR TD {
    padding-right: 2px;
    padding-left: 2px;
    border:thin solid #d3d3d3;
}
.TableData TR:hover {
    background: rgba(0,0,0,0.05);
}
.TableData .cotSTT {
    text-align:center;
    width: 10%;
}
.TableData .cotTenSanPham {
    text-align:left;
    width: 40%;
}
.TableData .cotHangSanXuat {
    text-align:left;
    width: 20%;
}
.TableData .cotGia {
    text-align:center;
    width: 120px;
}
.TableData .cotSoLuong {
    text-align: center;
    width: 50px;
}
.TableData .cotSo {
    text-align: right;
    width: 120px;
}
.TableData .tong {
    text-align: right;
    font-weight:bold;
    text-transform:uppercase;
    padding-right: 4px;
}
.TableData .cotSoLuong input {
    text-align: center;
}
@media print {
 @page {
 margin: 0;
 border: initial;
 border-radius: initial;
 width: initial;
 min-height: initial;
 box-shadow: initial;
 background: initial;
 page-break-after: always;
}
    </style>
</head>

<body onload="window.print()">
    @foreach ($HoaDon as $HoaDon)
    <div id="page" class="page">
        <div class="header">
            <div class="logo"><a style="color: #4318bb" href="#" class="simple-text logo-normal">

          <samp> CTU TECH CẦN THƠ </samp>
          <br>
          </a>
                <h6>Điện Thoại: 0292. 3733.113</h6>
                <h6>Số 1 Lý Tự Trọng, P. An Phú</h6>
                 <h6> Q. Ninh Kiều, TP. Cần Thơ</h6>
                </div>

            <div class="company"><h6>Mhd: {{$HoaDon->hd_ma}}</h6>
                <h6>{{ date('Y-m-d H:i:s') }}</h6>
                </div>
        </div>
      <br/>
      <div class="title">
              @if ($HoaDon->hd_trangThai==2 or $HoaDon->hd_trangThai==3 )
              Hóa đơn {{$HoaDon->lhd_ten}}
              @else
              Phiếu Theo Dỗi {{$HoaDon->lhd_ten}}
              @endif

            <br/>
            -------oOo-------

      </div>

        <table class="TableData">
            <tbody>
                    <tr>
                        <th>
                            Khách Hàng
                        </th>
                        <td>
                            {{$HoaDon->kh_hoTen       }}
                        </td>
                        <th>     Số điện thoai </th>
                        <td>
                            {{$HoaDon->kh_dienThoai}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Địa chỉ
                        </th>
                        <td >
                            {{$HoaDon->kh_diaChi}}
                        </td>
                        <th>     Thời Gian Nhận </th>
                        <td>
                            {{ date('H:i / d-m', strtotime($HoaDon->hd_taoMoi)) }}
                        </td>

                    </tr>
                    <tr>
                        <th>
                            Nhận thiết bị
                        </th>
                        <td colspan="4">
                            {{$HoaDon->hd_nhan}}
                        </td>

                    </tr>
                    <tr>
                        <th>
                       Mô tả
                        </th>
                        <td colspan="4">
                            {{$HoaDon->hd_ghiChu}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                       Biện pháp
                        </th>
                        <td colspan="4">
                            {{$HoaDon->hd_tinhtrang}}
                        </td>
                    </tr>

            </tbody>

         </table>
         <table class="TableData">
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>Số</th>
          <th>Bảo Hành</th>
          <th>Đến ngày</th>

        </tr>
        <?php



        $pos = 1;
        $tongsotien = 0;
        foreach($linhkien as $i => $row)
        {
            $tongsotien += $row->cthd_soLuong*$row->lk_gia;
            echo "<tr>";
            echo "<td class=\"cotSTT\">".$pos++."</td>";
            echo "<td class=\"cotTenLinhKien\">".$row->lk_ten."</td>";



            echo "<td class=\"cotSoLuong\" align='center'>".$row->cthd_soLuong."</td>";
            echo "<td class=\"cotGia\" align='center'>".$row->bh_ten."</td>";
            $date=date_create(date('Y-m-d'));

date_add($date,date_interval_create_from_date_string($row->bh_dich));

            echo "<td class=\"cotGia\" align='center'>".date_format($date,"d-m-Y")."</td>";
            echo "</tr>";
        }

    ?>
    @if ($HoaDon->lhd_ma==1)
    <tr>
          <td colspan="4" class="tong">Tổng cộng</td>
          <td class="cotSo"><?php echo number_format(($tongsotien=0),0,",",".")?> VNĐ</td>
        </tr>
    @else
    <tr>
          <td colspan="4" class="tong">Tổng cộng</td>

          <td class="cotSo"><?php echo number_format(($HoaDon->hd_gia),0,",",".")?> VNĐ</td>
        </tr>
    @endif

      </table>


      <div class="footer-right"> Cần thơ, ngày {{ date('d') }} tháng {{ date('m ') }} năm {{ date('Y') }}<br/>
        Nhân viên </div>
        <br>
        <br>
        <div class="footer-right" style="margin-left: 80%">{{ Auth::user()->nv_hoTen }}
         </div>
    </div>
    @endforeach
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



