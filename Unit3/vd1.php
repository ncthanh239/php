<?php 
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";
	if(isset($_GET['hieu'])){
		echo "<br> Hello ".$_GET['hieu'];
	}
 ?>