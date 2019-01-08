 <?php include('layout/header.php');?>

	
	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Sản Phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <h3 align="center"><b>PRODUCTS LIST</b></h3>
 		<a href="?mod=product&act=add" class="btn btn-success" title="">Add</a>
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>
 	<table class="table table-bordered" id="table-quanli">
 		<thead>
 			<tr>
 				<th align="center">Mã SP</th>
 				<th align="center">Tên SP</th>
 				<th align="center">Đơn Giá</th>
 				<th align="center">Hành Động</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($data as $row) {?>
 			<tr>
 				<td align="center"><?php echo $row['MaSP'] ?></td>
 				<td><?php echo $row['TenSP'] ?></td>
 				<td align="right"><?php echo number_format($row['DonGia']) ?></td>
 				<td align="center">
 					<a href="index.php?mod=product&act=detail&MaSP=<?php echo $row['MaSP'] ?>" class="btn btn-success" title="">Xem chi tiết</a>
 					<a href="index.php?mod=product&act=edit&MaSP=<?php echo $row['MaSP'] ?>" class="btn btn-primary" title="">Sửa</a>
 					<a href="index.php?mod=product&act=delete&MaSP=<?php echo $row['MaSP'] ?>" class="btn btn-danger" title="">Xóa</a>
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