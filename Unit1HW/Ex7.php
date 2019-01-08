<?php 
	echo "Cho n=10<br>";
	echo "Tính tổng s=1/1!+2/2!+...+n/n! <br>";
	$s=0;
	$gt=1;
	for ($i=1; $i <=10; $i++) { 
		$gt=$gt*$i;
		$s+=$i/$gt;
	}
	echo "Kết quả s: =".$s;
 ?>