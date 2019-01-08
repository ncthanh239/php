<?php 
	
	$arr = array(1,2,'ZENT', 3.14);
	$arr[]= 'ABC';
	$arr[]= 'DCE';
	$arr[]= 123;
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>" . $arr[2];

	foreach ($arr as $key => $value) {
		echo "<br>index $key co gia tri la $value";
	}

	foreach ($arr as $key) {
		echo "<br>-$key";
	}
 ?>