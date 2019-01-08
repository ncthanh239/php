 <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
                        <h3 align="center"><b>CUSTOMER DETAILS</b></h3>
				 		<a href="index.php?mod=customer&act=list" class="btn btn-warning">Quay lại >></a>
				 		<br><br>
				 		<p>Mã khách hàng: <?php echo $customer['MaKH'] ?></p>
				 		<p>Tên khách hàng: <?php echo $customer['TenKH'] ?></p>
				 		<p>Số điện thoại: <?php echo $customer['SDT'] ?></p>
				 		<p>Email: <?php echo $customer['Email'] ?></p>
				 		<p>Địa chỉ: <?php echo $customer['DiaChi'] ?></p>


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>