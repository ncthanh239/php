<?php 
$name= "Dương Vũ Văn Quá";
// $a=strlen($name);
$b=explode(' ',$name);
$c=count($b);
$dem="";
echo "Họ: ".$b[0];
echo "<br>Tên: ".$b[$c-1];
for ($i=1; $i <($c-1) ; $i++) { 
	$dem=$dem.$b[$i]." ";
}
echo "<br>Tên đệm: " .$dem;
?>	