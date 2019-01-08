<?php 
	include_once('models/Customer.php');
	class CustomerController{
		public function list(){
			$customerModel= new Customer();
			$data = $customerModel->All();
			require_once('views/customer/list.php');
		}
		public function detail(){
			$customerModel= new Customer();
			$MaKH=$_GET['MaKH'];
			$customer = $customerModel->detail($MaKH);
			require_once('views/customer/detail.php');
		}
		public function add(){
			
			require_once('views/customer/add.php');
		}
		public function store(){
			$data = $_POST;
			unset($data['save']);

			$customerModel = new Customer();
			$status = $customerModel->create($data);

			if($status==1){
				setcookie('msg','Thêm thành công',time()+1);
				header('Location: ?mod=customer&act=list');
			}else{
				setcookie('msg','Thêm không thành công',time()+1);
				header('Location: ?mod=customer&act=add');
			}
		}
		public function edit(){
			$customerModel = new Customer();
			$MaKH=$_GET['MaKH'];
			$customer = $customerModel->find($MaKH);
			require_once('views/customer/edit.php');
		}
		public function update(){
			$data = $_POST;
			unset($data['update']);

			$customerModel=new Customer();
			$status=$customerModel->update($data);
			//die;
			if($status==1){
				setcookie('msg','Update thành công',time()+1);
				header('Location: ?mod=customer&act=list');
			}else{	
				setcookie('msg','Update không thành công',time()+1);
				header('Location: ?mod=customer&act=edit');

			}
		}
		public function delete(){
			$customerModel = new Customer();
			$MaKH=$_GET['MaKH'];
			$status = $customerModel->delete($MaKH);
			if($status==1){
				setcookie('msg','Xóa thành công',time()+1);
				header('Location: ?mod=customer&act=list');
			}
		}
	}
 ?>