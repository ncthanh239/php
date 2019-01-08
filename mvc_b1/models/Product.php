<?php 
	//Riêng thư mục model không thêm model đằng sau file
	// include_once('models/Connection.php');
	include_once('models/Model.php');
	class Product extends Model{
		var $table_name = 'sanpham';
		var $primary_key = 'MaSP';

		
	}
	
?>