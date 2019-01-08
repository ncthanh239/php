<?php include('layout/header.php');?>
    <div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Chi Tiết Hóa Hơn
                        </div>
                    </div>
                    
        <div class="col-lg-6">
            <h3>ZENT MART</h3>
            <p>Add: Ngõ Trại Cá, Trương Định, HBT, Hà Nội</p>
            <p>Mobile: 0868 901 456</p>
        </div>
        <?php foreach ($data as $value) { ?>
        <div class="col-lg-6">
            <h3>HÓA ĐƠN BÁN HÀNG</h3>
            <p>Mã hóa đơn: <?php echo $value['MaHD']; ?></p>
            <p>Ngày bán: <?php echo $value['NgayBan'] ?></p>
            <?php break;} ?>
        </div>

        <div class="col-lg-12">
            <table class="table table-bordered">
               <thead>
            <tr>
                <th align="center">Mã SP</th>
                <th align="center">Tên SP</th>
                <th align="center">Số Lượng</th>
                <th align="center">Đơn Giá</th>
                <th align="center">Thành Tiền</th>
            </tr>
        </thead>
        <?php
        $sum=0;
            
           

            foreach ($data as $value) {
               $sum+=$value['SoLuong']*$value['GiaBan'];

                ?>
        <tbody>
            <td><?php if(isset($value['MaSP'])) echo $value['MaSP'] ?></td>
            <td><?php if(isset($value['TenSP'])) echo $value['TenSP'] ?></td>
            <td align="center"> <?php echo $value['SoLuong'] ?></td>
            <td><?php if(isset($value['GiaBan'])) echo number_format($value['GiaBan']) ?></td>
            <td><?php echo number_format($value['SoLuong']*$value['GiaBan']) ?></td>


        </tbody>
        
               <?php } ?>
       
          
            
       
         </table>
         <div align="center" style="color: red;"><b>Tổng Tiền: <?=number_format($sum)?> VNĐ</b> </div>
        </div>
        <div align="center" style="color: red;"><b>Nhân viên bán hàng: </b> </div>
        <p></p>
        <p></p>
        <p></p>
        <p align="center" style="color: red;"> <b><?php echo $_SESSION['empl']['TenNV'] ?></b></p>
        <br>
        <br>
        <br>
        <div align="center"><?php ?> </div>
        <br>
        <br>
        <br>
        <!-- <a href="" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> In Hóa Đơn</a> -->
        <button onclick="myFunction()" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> In Hóa Đơn</button>
       <a href="?mod=sell&act=cancela" class="btn btn-warning">Trở về</a>
    </div>
    <script type="text/javascript">
        function myFunction(){
            window.print();
        }

    </script>

 <?php  include('layout/footer.php');?>