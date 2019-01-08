<?php 
session_start();
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
</head>
<body>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Ma sinh vien</th>
					<th>Ten</th>
					<th>Tuoi</th>
					<th>Truong</th>
					<th>Hanh dong</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($_SESSION['tt_sinhvien'])){

					foreach ($_SESSION['tt_sinhvien'] as $sinhvien) { ?>
					<tr>
						<td><?php echo $sinhvien['msv']?></td>
						<td><?= $sinhvien['ten']?></td>
						<td><?= $sinhvien['tuoi']?></td>
						<td><?= $sinhvien['truong']?></td>
						<td><a href="delete.php?msv=<?= $sinhvien['msv'] ?>" class="btn btn-primary">Xoa</a>
						<a href="edit.php?msv=<?= $sinhvien['msv'] ?>" class="btn btn-warning">Edit</a>
						<a href="detail.php?msv=<?= $sinhvien['msv'] ?>" class="btn btn-success">Detail</a>
						</td>

					</tr>
					<?php 
					}
				}?>
			</tbody>
		</table>
		<a href="add.php" class="btn btn-primary">Them moi</a>
		
	</div>
</body>
</html>