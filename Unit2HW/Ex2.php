<?php 
	$array= array(2,3,8,1,7,9,6,12,15,13);
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	echo "<br>Mảng chẵn là: <br>";
	foreach ($array as $key => $num) {
		if($num %2==0){
			echo " ".$num;
		}
	}
	echo "<br>Mảng lẻ là: <br>";
	foreach ($array as $key => $num) {
		if($num %2!=0){
			echo " ".$num;
		}
	}
 ?>