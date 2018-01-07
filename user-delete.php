<?php
SESSION_START();
if(@$_SESSION['level']==1){
include_once("user-function.php");
@$user_id=$_GET['user_id'];//lay user_id trong link ra
// Nếu người dùng submit form
if (!empty($_POST['delete_user']))
{
    // Lay data
	$data['user_id'] = $_GET['user_id'];

    // Neu ko co loi thi delete
    delete_user($data['user_id']);

}

}
else {
header("location:sign-in.php");
exit;
}

?>
<head>
<?php include_once("references.php");?>
</head>
<body>
	<div class='bmp-noti-bg'>
		<div class='bmp-noti-border'>
			<p class='bmp-noti'>You really want to delete this user (ID: <kbd><?php echo @$user_id;?></kbd>)? This action cannot be undo!</p>
                 <form method="post">
                 	<input type="submit" name="delete_user" value="Delete!">
                 </form>
			<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
		</div>
	</div>
</body>