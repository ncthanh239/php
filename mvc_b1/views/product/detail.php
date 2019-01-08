<?php include_once('layout/header.php'); ?>
 	 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Sản Phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <h3 align="center">PRODUCT DETAILS</h3>
                        <a href="index.php?mod=product&act=list" class="btn btn-warning">Quay lại >></a>
							<br><br>
				 		<p>Mã sản phẩm: <?php echo $product['MaSP'] ?></p>
				 		<p>Tên sản phẩm: <?php echo $product['TenSP'] ?></p>
				 		<p>Số lượng: <?php echo $product['SoLuong'] ?></p>
				 		<p>Đơn giá: <?php echo $product['DonGia'] ?></p>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
 <?php  include('layout/footer.php');?>