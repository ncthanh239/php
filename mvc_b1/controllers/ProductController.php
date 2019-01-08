<?php 
	include_once('models/Product.php');
	class ProductController{
		public function list(){
			$productModel= new Product();
			$data = $productModel->All();
			require_once('views/product/list.php');
		}
		public function detail(){
			$productModel= new Product();
			$MaSP=$_GET['MaSP'];
			$product = $productModel->find($MaSP);
			require_once('views/product/detail.php');
		}
		public function add(){
			require_once('views/product/add.php');
		}
		public function store(){
			$data = $_POST;
			unset($data['save']);

			$productModel= new Product();
			$status = $productModel->create($data);

			if($status==1){
				setcookie('msg','Thêm thành công!',time()+1);
				header('Location: ?mod=product&act=list');
			}else{
				//về nhà làm
				header('Location: ?mod=product&act=add');
			}
		}
		public function edit(){
			$productModel= new Product();
			$MaSP=$_GET['MaSP'];
			$product = $productModel->find($MaSP);
			require_once('views/product/edit.php');
		}
		public function update(){
			$data = $_POST;
			unset($data['update']);

			$productModel= new Product();
			$status = $productModel->update($data);

			if($status==1){
				setcookie('msg','Update thành công!',time()+1);
				header('Location: ?mod=product&act=list');
			}else{

				
			}
		}

		public function delete(){
			$productModel= new Product();
			$MaSP=$_GET['MaSP'];
			
			$status = $productModel->delete($MaSP);
			if($status==1){
				setcookie('msg','Xóa thành công!',time()+1);
				header('Location: ?mod=product&act=list');
			}
		}
	}
 ?>