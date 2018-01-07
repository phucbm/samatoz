<?php
SESSION_START();
if(@$_SESSION['level']==1){
include_once("product-function.php");
$glx_id=$_GET['glx_id'];//lay user_id trong link ra
// Nếu người dùng submit form
if (!empty($_POST['delete_glx']))
{
    // Lay data
	$data['glx_id'] = $_GET['glx_id'];

    // Neu ko co loi thi delete
    delete_glx($data['glx_id']);

}

}
else {
header("location:sign-in.php");
exit;
}
?>
<head>
<!-- Boostrap CSS -->
<link rel='stylesheet' type='text/css' href='CSS/bootstrap.css'>

<!-- BMP Style -->
<link rel='stylesheet' type='text/css' href='CSS/bmp-style.css'>

<!-- Hover CSS -->
<link rel='stylesheet' type='text/css' href='CSS/hover.css'>
</head>
<body>
	<div class='bmp-noti-bg'>
		<div class='bmp-noti-border'>
			<p class='bmp-noti'>Muốn xóa sản phẩm này hả?</p>
                 <form method="post">
                 	<input type="submit" name="delete_glx" value="Ừa">
                 </form>
			<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Không bấm thử chơi thôi :3</a>
		</div>
	</div>
</body>