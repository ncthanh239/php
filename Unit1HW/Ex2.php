<?php 
	echo "Phương trình có dạng 3x2-2x-1=0<br> ";
	$a=3;
	$b=-2;
	$c=-1;
	$delta=(-$b*-$b)-4*($a*$c);
	echo "Nghiệm x1:=".(-$b+sqrt($delta))/(2*$a).'<br>';
	echo "Nghiệm x1:=".(-$b-sqrt($delta))/(2*$a). '<br>';
	echo "----------------<br>";
	echo "Phương trình có dạng 0x2+0x+0=0 <br>";
	echo "Phương trình vô số nghiệm!<br>";
	echo "----------------<br>";
	echo "Phương trình có dạng 0x2+0x+6=0<br>";
	echo "Phương trình vô nghiệm!<br>";
	echo "----------------<br>";
	echo "Phương trình có dạng 0x2+6x-3=0<br>";
	$d=6;
	$e=-3;
	echo "Phương trình có nghiệm: ".(-$e/$d);
 ?>