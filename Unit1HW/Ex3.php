<?php 
	
	echo "In ra bằng for <br>";
	echo "<br>";
	for ($i=31; $i < 127; $i++) { 
		echo $i. "---". chr($i) ."<br>";
	}


	echo "In ra bằng while <br>";
	echo "<br>";

	$j=31;
	while ($j<127) {
		echo $j. "---" .chr($j) . "<br>";
		$j++;
	}


	echo "In ra bằng do while <br>";
	echo "<br>";

	$n=31;
	do {
		echo $n . "---" .chr($n). "<br>";
		$n++;
	} while ($n<127);

 ?>