<?php 
	$products = array(
		'SP01'=>array('SP01','IP 4','4000000','10'),
		'SP02'=>array('SP02','IP 5','6000000','20'),
		'SP03'=>array('SP03','IP 6','8000000','30'),
		'SP04'=>array('SP04','IP 7','10000000','50'),
		'SP05'=>array('SP05','IP X','20000000','10'),
	);

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
		<h3 align="center">DANH SÁCH SẢN PHẨM</h3>
		<a href="cart1.php" class="btn btn-success">Danh sách sản phẩm trong giỏ hàng >></a>
		<table class="table table-hover">
			<tr>
				<td align="center">Ma SP</td>
				<td align="center">Ten SP</td>
				<td align="center">Don gia</td>
				<td align="center">So luong</td>
				<td align="center">#</td>
			</tr>
				<?php foreach ($products as $product) { ?>
					
				
				<tr>
					<td align="center"><?= $product[0] ?></td>
					<td><?= $product[1] ?></td>
					<td align="right"><?= number_format( $product[2]) ?></td>
					<td align="center"><?= $product[3] ?></td>
					
					<td align="center"><a href="test.php?code=<?=$product[0] ?>" class="btn btn-primary">Add to cart</a></td>
				</tr>
				
				<?php } ?>
		</table>
		
	</div>
</body>
</html>