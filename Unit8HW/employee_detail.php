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
	$maNV=$_GET['MaNV'];
	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM nhanvien where MaNV = '".$maNV."'";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);
	$employee=$result->fetch_assoc();
	// while($row = $result->fetch_assoc()) { 
		  
	// echo "<pre>";
	// 	print_r($row);
	// echo "</pre>";
		  	   
        	 
 //    }

 ?>
 <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
				<h3 align="center"><b>EMPLOYEES DETAILS</b></h3>
		 		<a href="employees.php" class="btn btn-warning">Quay lại >></a>
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