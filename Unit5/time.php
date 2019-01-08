<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	echo time();

	echo "<br>" . date('Y-m-d H:i:s','1526816805');
	echo "<br>" . date('H:i d/m/Y');
	echo "<br>" .strtotime('2018-05-20 18:46:45');

	$dateint= mktime(0,0,0,5,20+1500,2018);
	echo "<br>". date('Y-m-d H:i:s',$dateint);
 ?>