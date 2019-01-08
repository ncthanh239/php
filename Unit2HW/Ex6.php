<?php 
	$name="  nguyen   CHi    tHanh   ";
	$name = strtolower($name);
	$name=trim($name);
	$leng=strlen($name);
	$name[0]=strtoupper($name[0]);
	for($i=1;$i<$leng;$i++){
		if($name[$i]==' '){
			$name[$i+1]=strtoupper($name[$i+1]);	
		}
	}
	echo "Chuỗi sau khi chuẩn hóa: ".$name;

 ?>