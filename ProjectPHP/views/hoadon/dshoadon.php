<?php include('layout/header.php');?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Sản Phẩm
            </div>
        </div>
        <table class="table table-bordered" id="table-quanli">
            <thead>
                <tr>
                    <th align="center">Mã HD</th>
                    <th align="center">Tên Khách Hàng</th>
                    <th align="center">Tên Nhân Viên</th>
                    <th align="center">Ngày Bán</th>
                    <th align="center">Tổng Tiền</th>
                    <th align="center">Hành Động</th>

                </tr>
            </thead>
            <tbody>
                <?php if(isset($pills)){
                foreach ($pills as $row) {?>
                <tr>
                    <td align="center"><?php echo $row['MaHD'] ?></td>
                     <td align="center"><?php echo $row['TenKH'] ?></td> 
                     <td align="center"><?php echo $row['TenNV'] ?></td>
                      <td align="center"><?php echo $row['NgayBan'] ?></td>
                      <td align="center"><?php echo number_format($row['TongTien']) ?></td>
                      <td align="center"><a href="?mod=sell&act=billDetail&MaHD=<?= $row['MaHD']; ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                   

                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>


    <?php  include('layout/footer.php');?>