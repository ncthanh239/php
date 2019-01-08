<?php include('layout/header.php');?>

	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Quản Lí Khách Hàng
				</div>
				<!-- /.panel-heading -->
		<form action="?mod=customer&act=store" method="POST" role="form">
			<h3 align="center"><b>ADD NEW CUSTOMER</b></h3>
			<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>
			<a href="?mod=customer&act=list" class="btn btn-warning">Quay lại >></a>
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã KH</label>
				<input type="text" class="form-control" id="" name="MaKH" placeholder="Nhập mã KH">
			</div>
			<div class="form-group">
				<label for="">Tên KH</label>
				<input type="text" class="form-control" id="" name="TenKH" placeholder="Nhập tên KH">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" name="DiaChi" placeholder="Nhập địa chỉ">
			</div>

			

			<button type="submit" class="btn btn-success" name="save" >Lưu thông tin</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="?mod=customer&act=list" class="btn btn-secondary">Trở về</a>
		</form>
	
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>





	<?php  include('layout/footer.php');?>