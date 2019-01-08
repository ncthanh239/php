 <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
				<h3 align="center"><b>EMPLOYEES DETAILS</b></h3>
		 		<a href="index.php?mod=employee&act=list" class="btn btn-warning">Quay lại >></a>
		 		<br><br>
		 		<p>Mã nhân viên: <?php echo $employee['MaNV'] ?></p>
		 		<p>Tên nhân viên: <?php echo $employee['TenNV'] ?></p>
		 		<p>Email: <?php echo $employee['Email'] ?></p>
		 		<p>Số điện thoại: <?php echo $employee['SDT'] ?></p>
		                    


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>