<?php 
    session_start();
    // session_destroy();
    print_r($_SESSION);
    if(isset($_SESSION['isLogin'])){
        header('Location: admin.php');
    }
    if(isset($_POST['email'])&& isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($email=='michellenguyen239@gmail.com'&& $password='123'){

            $_SESSION['isLogin']=1;
            setcookie('msg','Đăng nhập thành công!',time()+1);
            header('Location: admin.php');
        }else{
            echo "<h3>Đăng nhập không thành công!</h3>";
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST" role="form">
            <legend>PHP 11 - GET METHOD</legend>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="email">
            </div>
            
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="password">
            </div>  
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
