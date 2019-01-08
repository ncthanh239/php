<?php 
session_start();

// $_SESSION['cart'];
if(isset($_SESSION['cart'])){
	header('Location: cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		h3{
			color: red;
		}
		table tr td{
			color: green;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 align="center">DANH SÁCH SẢN PHẨM TRONG GIỎ HÀNG</h3>
		<a href="index.php" class="btn btn-success">Trở lại trang chủ >></a>
		<table class="table table-hover">
			<tr>
				<td align="center">Ma SP</td>
				<td align="center">Ten SP</td>
				<td align="center">Don gia</td>
				<td align="center">So luong</td>
				<td align="center">Thanh tien</td>
			</tr>
			<?php
			$sum=0;
			foreach ($_SESSION['cart'] as $product) {
				$sum += $product['3']*$product[2];

				?>

				<tr>
					<td align="center"><?= $product[0] ?></td>
					<td><?= $product[1] ?></td>
					<td align="right"><?= number_format( $product[2]) ?></td>
					<td align="center"><a href="add2cart.php?code=<?= $product[0] ?>" class="btn btn-success">+</a>  <?= $product[3] ?>  <a href="delete.php?code=<?= $product[0] ?>" class="btn btn-success">-</a></td>
					
					<td align="right">
						<?php echo number_format($product['3']*$product[2]) ?>
					</td>
					<td align="center"><a href="delete.php?code=<?= $product[0] ?>" class="btn btn-warning">Delete</a></td>

				</tr>

				<?php } ?>
				<tr>
					<td colspan="4" align="right">Tổng tiền:</td>
					<td align="right"><?= number_format($sum)?></td>
				</tr>

					</table>

					<b><?php if(isset($_COOKIE['msgs'])) echo $_COOKIE['msgs'] ?></b>
					<b><?php if(isset($_COOKIE['msg']))
					echo $_COOKIE['msg'] ?></b>
				</div>
			</body>
			</html>