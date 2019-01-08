<?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh Sách Sản Phẩm
                        </div>
                        <!-- /.panel-heading -->
                        
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>
 	<table class="table table-bordered" id="table-quanli">
 		<thead>
 			<tr>
 				<th align="center">Mã SP</th>
 				<th align="center">Tên SP</th>
 				<th align="center">Đơn Giá</th>
 				<th align="center">Hành Động</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($_SESSION['data'] as $row) {?>
 			<tr>
 				<td align="center"><?php echo $row['MaSP'] ?></td>
 				<td><?php echo $row['TenSP'] ?></td>
 				<td align="right"><?php echo number_format($row['DonGia']) ?></td>
 				<td align="center">
 					<a href="index.php?mod=sell&act=cart&MaSP=<?php echo $row['MaSP'] ?>" class="btn btn-primary" title=""><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
 				
 				</td>
 				
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

            <div class="col-lg-6">
                 <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm khách chọn
                        </div>
                        <!-- /.panel-heading -->
                    <h3 align="center"><b>HÓA ĐƠN BÁN HÀNG</b></h3>
              
                <br><br>
                <p>Mã khách hàng: <?php echo $_SESSION['customer']['MaKH'] ?></p>
                <p>Tên khách hàng: <?php echo $_SESSION['customer']['TenKH'] ?></p>
                <p>Email: <?php echo $_SESSION['customer']['Email'] ?></p>
                <p>Số điện thoại: <?php echo $_SESSION['customer']['SDT'] ?></p>
                 <p>Địa chỉ: <?php echo $_SESSION['customer']['DiaChi'] ?></p>
            </div>

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
            if(isset($_SESSION['cart']))
          
            foreach ($_SESSION['cart'] as $sell) {
               $sum+=$sell['SoLuong']*$sell['DonGia'];

                ?>
        <tbody>
            <td><?php if(isset($sell['MaSP'])) echo $sell['MaSP'] ?></td>
            <td><?php if(isset($sell['TenSP'])) echo $sell['TenSP'] ?></td>
            <td align="center"><a href="?mod=sell&act=delete&MaSP=<?=$sell['MaSP']?>" class="btn btn-primary"> - </a> <?php echo $sell['SoLuong'] ?> <a href="?mod=sell&act=cart&MaSP=<?=$sell['MaSP']?>" class="btn btn-primary">+</a></td>
            <td><?php if(isset($sell['DonGia'])) echo number_format($sell['DonGia']) ?></td>
            <td><?php echo number_format($sell['SoLuong']*$sell['DonGia']) ?></td>
        </tbody>
               <?php } ?>
       
          
       
         </table>
          <p align="center" style="color: red;"><b>Tổng tiền: <?= number_format($sum)?> VNĐ</b> </p>
           <a href="?mod=sell&act=payment" class="btn btn-success" align="center"><i class="fa fa-money" aria-hidden="true"></i> Thanh Toán</a>
           <a href="?mod=sell&act=cancel" class="btn btn-warning">Hủy</a>
        

            </div>





 <?php  include('layout/footer.php');?>