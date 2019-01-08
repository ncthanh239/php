<?php 
	class Sinhvien{
		public static $id = '1234';
		public static $name = 'Nguyen Van A';
		public static $age = 20;


		public static function info(){
			echo "<br>msv: " .self::$id;
			echo "<br>ten: " .self::$name;
			echo "<br>tuoi " .self::$age;
		}
	}
	
 ?>