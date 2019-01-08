<?php 
	require_once('connection.php');
		$masp=trim($_GET['MaSP']);
		$query="SELECT* FROM sanpham where MaSP='".$masp."'";
		$result=$conn->query($query);

		$product=$result->fetch_assoc();
	if(isset($_POST['update'])){
		$masp=$_POST['MaSP'];
		$tensp=$_POST['TenSP'];
		$dongia=$_POST['DonGia'];
		$soluong=$_POST['SoLuong'];

		$query="UPDATE sanpham SET MaSP='".$masp."',TenSP='".$tensp."',DonGia='".$dongia."',SoLuong='".$soluong."' where MaSP='".$masp."'";

		
		$status=$conn->query($query);
		
		if($status==1){
			setcookie('msg','Update thành công',time()+1);
		}else{
			setcookie('msg','Update không thành công',time()+1);
		}
		header('Location: products.php');
	}

 ?>

   <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Sản Phẩm
                        </div>
                        <!-- /.panel-heading -->
					<form action="" method="POST" role="form">
			<h3 align="center">ADD NEW PRODUCT</h3>
		
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
			<a href="products.php" class="btn btn-secondary">Trở về</a>
		</form>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>