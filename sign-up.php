<?php
SESSION_START();
include_once("user-function.php");
// Nếu người dùng submit form
if (!empty($_POST['signup']))
{
    // Lay data
    $data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	$data['verify_password'] =$_POST['verify_password'];
	$data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];
    $data['address'] = $_POST['address'];
	
    // Neu ko co loi thi insert
        add_user($data['username'], $data['password'], $data['phone'], $data['email'], $data['address'], $data['verify_password']);
}
?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>

  <!-- jQuery Javascript -->
  <script src="CSS/jquery-1.12.4.js"></script>

  <!-- Boostrap CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">

  <!-- Boostrap theme CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap-theme.css">

  <!-- Boostrap JavaScript -->
  <script src="CSS/bootstrap.js"></script>

  <!-- BMP Style -->
  <link rel="stylesheet" type="text/css" href="CSS/bmp-style.css">

  <!-- Hover CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/hover.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="CSS/font-awesome.css">

  <!-- Icon on Title -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <!-- BMP Style 2 -->
  <link rel="stylesheet" type="text/css" href="CSS/bmp-style-v2.css">
  <style>
/* Note: Try to remove the following lines to see the effect of CSS positioning */
  /*data offset: khoang cach ma navbar xuat hien*/
.affix {
	top: 0px;
//khoang cach tu navbar den body  width: 100%;
	-webkit-transition: all .5s ease-in-out;
	transition: all .5s ease-in-out;
}
.affix-top {
	position: static;
	top: -35px;
}
.affix + .bmp-spec {
	padding-top: 63px;
//khoang cach tu content den navbar
}
</style>
  </head>

<body>

<?php include_once("menu-bar.php");?>

<!-- BODY -->
<div class="container">
  <div class="row bmp-bgf5" style="margin-top:50px"> 
    <!-- sign up form -->
    <div class="col-lg-12">
      <div>
        <p class="bmp-login-header">Tạo tài khoản mới</p>
      </div>
      <form class="form" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
        </div>
        <div class="form-group">
          <label for="password">Mật khẩu:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
        </div>
        <div class="form-group">
          <label for="verify_password">Xác nhận mật khẩu:</label>
          <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Re-enter password" required/>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your email" required/>
        </div>
        <div class="form-group">
          <label for="phone">Số điện thoại:</label>
          <input type="number" class="form-control" id="phone" name="phone" placeholder="Your phone number" required/>
        </div>
        <div class="form-group">
          <label for="address">Địa chỉ:</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Your address" required/>
        </div>
        <input class="btn btn-block" type="submit" name="signup" value="Đăng ký" style="background-color:#38B1D5;color:white;"/>
        <a href="sign-in.php" class="btn btn-block hvr-underline-from-center">Đăng nhập</a>
      </form>
    </div>
  </div>
  <!-- end row --> 
</div>
<!-- end body content --> 

<?php include_once("footer.php");?>

</body>
</html>
