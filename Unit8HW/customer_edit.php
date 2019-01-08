<?php 
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$maKH=trim($_GET['MaKH']);
	$query="SELECT* FROM khachhang where MaKH='".$maKH."'";
	$result=$conn->query($query);

	$customer=$result->fetch_assoc();
	if(isset($_POST['update'])){
		$maKH=$_POST['MaKH'];
		$tenKH=$_POST['TenKH'];
		$sdt=$_POST['SDT'];
		$email=$_POST['Email'];
		$diaChi=$_POST['DiaChi'];

		$query="UPDATE khachhang SET MaKH='".$maKH."',TenKH='".$tenKH."',SDT='".$sdt."',Email='".$email."',DiaChi='".$diaChi."' where MaKH='".$maKH."'";
		
		$status=$conn->query($query);
		if($status==1){
			setcookie('msg','Update thành công',time()+1);
		}else{
			setcookie('msg','Update không thành công',time()+1);
		}
		// echo "<pre>";
		// 	var_dump($query);
		// 	die;
		header('Location: customers.php');
	}
 ?>
  <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
                      <form action="" method="POST" role="form">
			<h3 align="center"><b>ADD NEW CUSTOMER</b></h3>
			<a href="customers.php" class="btn btn-warning">Quay lại >></a>
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã KH</label>
				<input type="text" class="form-control" id="" name="MaKH" placeholder="Nhập mã KH" value="<?=$customer['MaKH']?>" readonly>
			</div>
			<div class="form-group">
				<label for="">Tên KH</label>
				<input type="text" class="form-control" id="" name="TenKH" placeholder="Nhập tên KH" value="<?=$customer['TenKH']?>">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại" value="<?=$customer['SDT']?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email" value="<?=$customer['Email']?>">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" name="DiaChi" placeholder="Nhập địa chỉ" value="<?=$customer['DiaChi']?>">
			</div>

			

			<button type="submit" class="btn btn-success" name="update" >Update</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
			<a href="customers.php" class="btn btn-secondary">Trở về</a>
			
		</form>  
	

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>