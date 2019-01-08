<?php 
	$name= "Zent Group - Code your life !";

	$data= explode("-",$name);
	echo "<pre>";
		print_r($data);
	echo "</pre>";
	echo "<br>".strlen($data[0]);
	echo "<br>".strlen($data[1]);
	//Ghep chuoi tjeo ki tu mong muon
	$name = implode(" ", $data);
	echo "<br>". $name;
	//Kiem tra do dai chuoi
	echo "<br> - Do dai chuoi: ".strlen($name);

	//Dem so tu trong chuoi
	echo "<br> - Dem so tu trong chuoi".str_word_count($name);

	//Lap lai so lan 
	echo "<br>" . str_repeat("<br> Zent Group <br>",5);

	//Thay the chuoi
	echo "<br>".str_replace(" ","+",$name);

	//Ham bam du lieu
	echo "<br> Hàm băm dữ liệu:" .md5('123456');

	echo "<br> Hàm băm dữ liệu: " .sha1('123456');
 ?>