<?php 
	
	include_once('models/Sell.php');
	include_once('models/Product.php');
	include_once('models/Customer.php');
	include_once('models/Employee.php');
	include_once('models/Bill.php');
	include_once('models/BillDetail.php');

	class SellController{

		public function list(){
			$sellModel=new Sell();
			$data=$sellModel->All();
			require_once('views/sell/list.php');
			// require_once('views/sell/bill.php');
		}

		public function detail(){
			$sellModel=new Sell();
			$MaKH=$_GET['MaKH'];
			$sell=$sellModel->find($MaKH);
			$_SESSION['customer']=$sell;

			$data=$sellModel->AllSP();
			$_SESSION['data']=$data;
			require_once('views/sell/cart.php');
		}
		public function cart(){
			$sellModel=new Sell();
			$MaSP=$_GET['MaSP'];
			$sell=$sellModel->findSP($MaSP);
			if(isset($_SESSION['cart'][$MaSP])){
				$_SESSION['cart'][$MaSP]['SoLuong']++;
			}else{
				$_SESSION['cart'][$sell['MaSP']] = $sell;
				$_SESSION['cart'][$sell['MaSP']]['SoLuong'] =1;
			}
			$_SESSION['product']=$sell;
			// echo "<pre>";
			// print_r($_SESSION['cart']);
			// echo "</pre>";
			// die;
			require_once('views/sell/cart.php');

		}

		public function delete(){
			$sellModel=new Sell();
			$MaSP=$_GET['MaSP'];
			$sell=$sellModel->findSP($MaSP);
			// session_start();
			if($_SESSION['cart'][$MaSP]['SoLuong']>1){
				$_SESSION['cart'][$MaSP]['SoLuong']--;
			}else{
				unset($_SESSION['cart'][$MaSP]);
			}
				require_once('views/sell/cart.php');
		}

		public function payment(){

			$productModel = new Product();
			$maNV = $_SESSION['empl']['MaNV'];
			$customer = $_SESSION['customer'];
			$cart = $_SESSION['cart'];
			$_SESSION['chitiethd']=$_SESSION['cart'];
			
			$hoadon=array();
			$hoadon['MaHD']=$customer['MaKH'].'_'.$maNV.'_'.time();
			$hoadon['MaKH'] = $customer['MaKH'];
			$hoadon['MaNV'] = $maNV;
			$hoadon['NgayBan']=date('Y-m-d H:i:s');
			$bill = new Bill();
			$bill->create($hoadon);
			// require_once('views/sell/bill.php');


			$tong_tien=0;
			foreach ($cart as $product) {
				$prod['MaHD']=$hoadon['MaHD'];
				$prod['MaSP']=$product['MaSP'];
				$prod['SoLuong']=$product['SoLuong'];
				$prod['GiaBan']=$product['DonGia'];
				$prod['ThanhTien']=$product['DonGia']*$product['SoLuong'];
				$tong_tien+=$prod['ThanhTien'];


				$billDetail = new BillDetail();
				$result =$billDetail->create($prod);
				
				$productModel->reduceQuant($prod['MaSP'],$prod['SoLuong']);

			}


			$ubill['MaHD']=$hoadon['MaHD'];
			$ubill['TongTien'] = $tong_tien;
			$bill->update($ubill);
			
			// require_once('views/sell/bill.php');
			// 

			header('Location: ?mod=sell&act=bill_detail&MaHD='.$hoadon['MaHD']);
			//unset($_SESSION['cart']);
			// unset($_SESSION['customer']);
		}

		public function bill_detail(){
			$maHD=$_GET['MaHD'];
			$bill=new Bill();
			$hoadon=$bill->find($maHD);
			$customerModel=new Customer();
			$customer=$customerModel->find($hoadon['MaKH']);

			$billDetailModel=new BillDetail();
			$billDetails=$billDetailModel->find($maHD);

			$employeeModel=new Employee();
			$employee=$employeeModel->find($hoadon['MaNV']);

			$products=array();
			$productModel=new Product();

			// echo "<pre>";
			// 	print_r($billDetails);
			// echo "</pre>";
			// die;

			// foreach ($billDetails as $billDetail) {
			// 	$product=$productModel->find($billDetail['MaSP']);

			// 	$product['SoLuong']=$billDetail['SoLuong'];

			// 	$products[]=$product;
			// }
			


			require_once('views/sell/bill_detail.php');

		}

		public function billDetail(){
			// $maHD=$_GET['MaHD'];
			// $bill=new Bill();
			// $hoadon=$bill->find($maHD);
			// $customerModel=new Customer();
			// $customer=$customerModel->find($hoadon['MaKH']);

			// $billDetailModel=new BillDetail();
			// $billDetails=$billDetailModel->find($maHD);
			// // echo "<pre>";
			// // 	print_r($billDetails);
			// // echo "</pre>";
			// // die;
			// $employeeModel=new Employee();
			// $employee=$employeeModel->find($hoadon['MaNV']);

			// $products=array();
			// $productModel=new Product();

			// foreach ($billDetails as $billDetail) {
			// 	$product=$productModel->find($billDetail['MaSP']);

			// 	$product['SoLuong']=$billDetail['SoLuong'];

			// 	$products[]=$product;
			$MaHD=$_GET['MaHD'];
			$billdetail=new BillDetail();
			$data=$billdetail->find($MaHD);


			


			require_once('views/sell/billDetail.php');

		}

		public function ListBillByEmpl(){
			$billmd= new Bill();
			// $bills = $billmd->All();

			$pills=$billmd->ListBillByEmpl();
			// var_dump($pills);
			// die;
			
			require_once('views/hoadon/dshoadon.php');
		}

		public function cancel(){
			unset($_SESSION['cart']);
			unset($_SESSION['customer']);
			header('Location: ?mod=sell&act=list');
		}

		public function cancela(){
			unset($_SESSION['cart']);
			unset($_SESSION['customer']);
			header('Location: ?mod=sell&act=list');
		}
	
	}
 ?>