<?php include('layout/header.php');?>

    
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quản Lí Khách Hàng
                        </div>
                        <!-- /.panel-heading -->
                        
                    <h3 align="center"><b>Danh Sách Khách Hàng</b></h3>
        <a href="?mod=customer&act=add" class="btn btn-success" title="">Add</a>
        <p><?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-success" role="alert">
                <strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
            </div>
        <?php } ?></p>
    <table class="table table-bordered" id="table-quanli">
        <thead>
            <tr>
                <th align="center">Mã KH</th>
                <th align="center">Tên KH</th>
                <th align="center">SĐT</th>
                <th align="center">Email</th>
                <th align="center">Địa Chỉ</th>
                <th align="center">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) {?>
            <tr>
                <td align="center"><?php echo $row['MaKH'] ?></td>
                <td><?php echo $row['TenKH'] ?></td>
                <td align="center"><?php echo $row['SDT'] ?></td>
                <td align="center"><?php echo $row['Email'] ?></td>
                <td align="center"><?php echo $row['DiaChi'] ?></td>
                <td align="center">
                    <a href="index.php?mod=sell&act=detail&MaKH=<?php echo $row['MaKH'] ?>" class="btn btn-primary" title=""><i class="fa fa-cart-plus" aria-hidden="true"></i> Tạo hóa đơn</a>
                  
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