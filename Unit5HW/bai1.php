<?php
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LdxUFoUAAAAAHlqUcUQMhIMbENmEFxttfryIAwR';
$secret_key  = '6LdxUFoUAAAAAOPGKdrFc4Mie39pj5oNglLkwP_N';
  
//kiem tra submit form
if(isset($_POST['login']))
{
    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];
      
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        echo 'Captcha khong dung';
    }
    if($response->success == true)
    {
        echo 'Captcha dung';
    }else{
        echo 'Captcha khong dung';
    }
}
?>
<?php 
	function send_email($email_recive,$name,$contents,$subject ){
		//https://www.google.com/settings/security/lesssecureapps
		// Khai báo thư viên phpmailer
        require "phpmailer/PHPMailerAutoload.php";
        require "phpmailer/class.phpmailer.php";
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 0;
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "auto.zentgroup@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "1@3$5^7*"; //Mật khẩu của gmail
        $mail->SetFrom("zentgroup@gmail.com", "Zent Group"); // Thông tin người gửi
        $mail->AddReplyTo("zentgroup@gmail.com","Zent Group");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
         
        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
         echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
			return false;
        } else {
			return true;
          echo "Đã gửi thư thành công!";
        }
	}
	send_email('michellenguyen239@gmail.com','Nguyen Chi Thanh','<h3>PHP 11</h3>','PHP 11 test');
 ?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<form action="" method="POST" role="form">

		<legend>Zent group PHP My SQL</legend>

		<div class="form-group">
			<label for="">Họ tên</label>
			<input type="text" class="form-control" id="" placeholder="Họ tên">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào email">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào password">
		</div>
		<div class="form-group">
			<label for="">Giới tính</label>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
				<label class="custom-control-label" for="customRadioInline1">Male</label>
			
				<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
				<label class="custom-control-label" for="customRadioInline2">Female</label>
			
				<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
				<label class="custom-control-label" for="customRadioInline2">Other</label>
			</div>
		</div>	
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ">
		</div>		

		
		<div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
		<button type="submit" class="btn btn-primary">Lưu thông tin</button>
	</form>
	</div>
</body>
</html>