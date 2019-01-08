<?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
<form action="?mod=employee&act=update" method="POST" role="form">
			<h3 align="center"><b>ADD NEW EMPLOYEE</b></h3>
		<a href="employees.php" class="btn btn-warning">Quay lại >></a>
		<br>
		<br>
			<div class="form-group">
				<label for="">Mã NV</label>
				<input readonly type="text" class="form-control" id="" name="MaNV" placeholder="Nhập mã NV" value="<?=$employee['MaNV']?>">
			</div>
			<div class="form-group">
				<label for="">Tên NV</label>
				<input type="text" class="form-control" id="" name="TenNV" placeholder="Nhập tên NV" value="<?=$employee['TenNV']?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email" value="<?=$employee['Email']?>">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại" value="<?=$employee['SDT']?>">
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" id="" name="MatKhau" placeholder="Nhập mật khẩu">
			</div>
		
			
		
			<button type="submit" class="btn btn-success" name="update" >Lưu thông tin</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			
		</form>
                    


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>