<?php 
	//Riêng thư mục model không thêm model đằng sau file
	// include_once('models/Connection.php');
 	include_once('models/Model.php');
	class Customer extends Model{
		var $table_name = 'khachhang';
		var $primary_key = 'MaKH';

	}
	
?>