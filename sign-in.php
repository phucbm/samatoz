<?php
SESSION_START();
include_once("user-function.php");
// Nếu người dùng submit form
if (!empty($_POST['signin']))
{
	//Lấy dữ liệu nhập vào
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	
    //kiem tra du lieu
	sign_in($data['username'],$data['password']);

    // Trở về trang danh sách


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
    <div class="col-lg-6"> <img src="images/example-add/signin-image.png" width="500" alt=""/> </div>
    <div class="col-lg-6">
      <div>
        <p class="bmp-login-header">Đăng nhập tài khoản SamAtoZ</p>
      </div>
      <form class="form" method="post">
        <div class="form-group">
          <label for="username">Tên đăng nhập:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
        </div>
        <div class="form-group">
          <label for="password">Mật khẩu:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
        </div>
        <input class="btn btn-block" type="submit" name="signin" value="Đăng nhập" style="background-color:#38B1D5;color:white;"/>
        <a href="sign-up.php" class="btn btn-block hvr-underline-from-center">Đăng ký</a>
      </form>
    </div>
  </div>
  <!-- end row --> 
</div>
<!-- end body content --> 

<?php include_once("footer.php");?>

</body>
</html>
