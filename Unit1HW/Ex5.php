<?php 
	echo "Cho n= 10";
	echo " Tính tổng s= 1+ 1/2 + 1/3...+1/n <br>";
	$s=0;
	for ($i=1; $i <= 10; $i++) { 
		$s=$s+1/$i;
	}
	echo "Tổng s: =".$s;

 ?>