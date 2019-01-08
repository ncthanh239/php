<?php 
	include_once('models/Employee.php');
	class EmployeeController{
		public function list(){
			$employeeModel= new Employee();
			$data = $employeeModel->All();
			require_once('views/employee/list.php');
		}
		public function detail(){
			$employeeModel= new Employee();
			$MaNV=$_GET['MaNV'];
			$employee=$employeeModel->find($MaNV);
			require_once('views/employee/detail.php');
		}
		public function add(){
			require_once('views/employee/add.php');
		}
		public function store(){
			$data=$_POST;
			unset($data['save']);

			$employeeModel=new Employee();
			$status=$employeeModel->create($data);
			if($status==1){
				setcookie('msg','Thêm thành công!',time()+1);
				header('Location: ?mod=employee&act=list');
			}else{
				header('Location: ?mod=employee&act=add');
			}
		}
		public function edit(){
			$employeeModel=new Employee();
			$MaNV=$_GET['MaNV'];
			$employee=$employeeModel->find($MaNV);
			require_once('views/employee/edit.php');
		}
		public function update(){
			$data=$_POST;
			unset($data['update']);
			$employeeModel = new Employee();

			$status=$employeeModel->update($data);

			if($status==1){
				setcookie('msg','Update thành công!',time()+1);
				header('Location: ?mod=employee&act=list');
			}else{

			}
		}

		public function delete(){
			$employeeModel=new Employee();
			$MaNV=$_GET['MaNV'];

			$status=$employeeModel->delete($MaNV);

			if($status==1){
				setcookie('msg','Xóa thành công!',time()+1);
				header('Location: ?mod=employee&act=list');
			}
		}
	}
 ?>