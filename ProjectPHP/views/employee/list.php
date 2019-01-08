<?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
                        <h3 align="center"><b>EMOLOYEES LIST</b></h3>
        <a href="?mod=employee&act=add" class="btn btn-success" title="">Add</a>
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
            <?php foreach ($data as $row) {?>
            <tr>
                <td align="center"><?php echo $row['MaNV'] ?></td>
                <td><?php echo $row['TenNV'] ?></td>
                <td align="center"><?php echo $row['Email'] ?></td>
                <td align="center"><?php echo $row['SDT'] ?></td>
                <td align="center">
                    <a href="index.php?mod=employee&act=detail&MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-success" title="">Xem chi tiết</a>
                    <a href="?mod=employee&act=edit&MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-primary" title="">Sửa</a>
                    <a href="?mod=employee&act=delete&MaNV=<?php echo $row['MaNV'] ?>" class="btn btn-danger" title="">Xóa</a>
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