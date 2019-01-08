<?php 
	$array= array(1,3,5,9,11);
	echo "Mảng ban đầu: ";
	echo "<pre>";
		print_r($array);
	echo "</pre>";
	echo "Mảng thu được là: ";
	for ($i=count($array)-1; $i >=0 ; $i--) { 
		echo "<br>".$array[$i];
	}
	

 ?>