<?php include('layout/header.php');?>

	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Quản Lí Nhân Viên
				</div>
				<!-- /.panel-heading -->
		<form action="?mod=product&act=update" method="POST" role="form">
			<legend>ADD NEW PRODUCT</legend>
		
			<div class="form-group">
				<label for="">Mã SP</label>
				<input readonly type="text" class="form-control" id="" name="MaSP" placeholder="Nhập mã SP" value="<?=$product['MaSP']?>">
			</div>
			<div class="form-group">
				<label for="">Tên SP</label>
				<input type="text" class="form-control" id="" name="TenSP" placeholder="Nhập tên SP" value="<?=$product['TenSP']?>">
			</div>
			<div class="form-group">
				<label for="">Số Lượng</label>
				<input type="number" class="form-control" id="" name="SoLuong" placeholder="Nhập số lượng SP" value="<?=$product['SoLuong']?>">
			</div>
			<div class="form-group">
				<label for="">Đơn giá</label>
				<input type="number" class="form-control" id="" name="DonGia" placeholder="Nhập đơn giá SP" value="<?=$product['DonGia']?>">
			</div>
		
			
		
			<button type="submit" class="btn btn-success" name="update" >Update</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="?mod=product&act=list" class="btn btn-secondary">Trở về</a>
		</form>
	</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>





	<?php  include('layout/footer.php');?>