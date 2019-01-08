<?php 
	$a = 10;
	if($a%2 ==0){
		echo $a. "la so chan";
	}
	else{
		echo $a. "la so le";
	}

	$numb = 2;
	switch ($numb) {
		case '2':
			# code...
			echo "<br> Hom nay la thu hai";
			break;
		case '3':
			# code...
			echo "<br> Hom nay la thu ba";
			break;
		
		default:
			# code...
			echo "<br>Loi";
			break;
	}

	for($i=0; $i<10; $i++){
		echo "<br> $i";
	}

	$i=0;
	while($i<10){
		echo "<br> $i";
		$i++;
	}

	$i=0;
	do{
		echo "<br> $i";
		$i++;
	}while($i<=10);

 ?>