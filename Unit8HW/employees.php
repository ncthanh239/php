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

    // Cau lenh truy van co so du lieu
    $query = "SELECT * FROM nhanvien";

    // Thuc thi cau lenh truy van co so du lieu
    $result = $conn->query($query);

    // while($row = $result->fetch_assoc()) { 
          
    // echo "<pre>";
    //  print_r($row);
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
                        <h3 align="center"><b>EMOLOYEES LIST</b></h3>
        <a href="employee_add.php" class="btn btn-success" title="">Add</a>
        <p><?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success" role="alert">
                <strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
            </div>
        <?php } ?></p>
    <table class="table table-bordered" id="table-quanli">
        <thead>
            <tr>
                <th align="center">Mã NV</th>
                <th align="center">Tên NV</th>
                <th align="center">Email</th>
                <th align="center">SĐT</th>
                <th align="center">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) {  ?>
            <tr>
                <td align="center"><?php echo $row['MaNV'] ?></td>
                <td><?php echo $row['TenNV'] ?></td>
                <td align="center"><?php echo $row['Email'] ?></td>
                <td align="center"><?php echo $row['SDT'] ?></td>
                <td align="center">
                    <a href="employee_detail.php?MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-success" title="">Xem chi tiết</a>
                    <a href="employee_edit.php?MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-primary" title="">Sửa</a>
                    <a href="employee_delete.php?MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-danger" title="">Xóa</a>
                </td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
                    


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





 <?php  include('layout/footer.php');?>