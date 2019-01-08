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

		$maNV='';
		$tenNV='';
		$email='';
		$sdt='';
		$matKhau='';

	if(isset($_POST['save'])){
		$maNV=$_POST['MaNV'];
		$tenNV=$_POST['TenNV'];
		$email=$_POST['Email'];
		$sdt=$_POST['SDT'];
		$matKhau=$_POST['MatKhau'];

		$query="SELECT COUNT(*) AS NUM_ROW from nhanvien where MaNV='".$maNV."'";

		$status=$conn->query($query);
		$employee=$status->fetch_assoc();

		$numb=$employee['NUM_ROW'];
		if($numb >=1){
			echo "Nhân viên đã tồn tại";
		}else{
			$query="INSERT INTO nhanvien (MaNV,TenNV,Email,SDT,MatKhau) 
			VALUES ('" .$maNV."','" .$tenNV."','" .$email."','" .$sdt."','" .$matKhau."')";
			$status=$conn->query($query);
			if($status==1){
				setcookie('msg','Thêm mới thành công',time()+1);
			}else{
				setcookie('msg','Thêm mói không thành công',time()+1);
			}
			
			header('Location: employees.php');
		}
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
					<h3 align="center"><b>ADD NEW EMPLOYEE</b></h3>
					<a href="employees.php" class="btn btn-warning">Quay lại >></a>
					<br>
					<br>
					<div class="form-group">
						<label for="">Mã NV</label>
						<input type="text" class="form-control" id="" name="MaNV" placeholder="Nhập mã NV">
					</div>
					<div class="form-group">
						<label for="">Tên NV</label>
						<input type="text" class="form-control" id="" name="TenNV" placeholder="Nhập tên NV">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" name="Email" placeholder="Nhập email">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="number" class="form-control" id="" name="SDT" placeholder="Nhập số điện thoại">
					</div>
					<div class="form-group">
						<label for="">Mật khẩu</label>
						<input type="password" class="form-control" id="" name="MatKhau" placeholder="Nhập mật khẩu">
					</div>
					
					
					
					<button type="submit" class="btn btn-success" name="save" >Lưu thông tin</button>
					<button type="submit" class="btn btn-primary" name="nosave" >Hủy</button>
					
				</form>    
				

			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>





	<?php  include('layout/footer.php');?>