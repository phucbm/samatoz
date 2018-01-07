<?php
SESSION_START();
include_once("user-function.php");
@$user_id=$_GET['user_id'];//lay user_id trong link ra
$user = get_user_by_id($user_id);
// Nếu người dùng submit form
if (!empty($_POST['update_user']))
{
    // Lay data
	$data['user_id'] = $_GET['user_id'];
	$data['password'] = $_POST['password'];
	$data['verify_password'] = $_POST['verify_password'];
	$data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];
    $data['address'] = $_POST['address'];
	$data['level'] = $_POST['level'];

    // Neu ko co loi thi update
    update_user($data['password'], $data['phone'], $data['email'], $data['address'], $data['verify_password'], $data['level'], $data['user_id']);

}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SamAtoZ</title>

<?php include_once("references.php");?>
<style></style>
</head>

<body>

<?php include_once("menu-bar.php");?>

<!-- BODY -->
<div class="container">
  <div class="row bmp-bgf5"> 
    <!-- sign up form -->
    <?php foreach($user as $item){?>
    <div class="col-lg-12">
      <div>
        <p class="bmp-login-header">Edit User: <?php echo @$item['username'];?></p>
      </div>
      <form class="form" method="post">
        <!-- user name -->
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" value="<?php echo @$item['username'];?>" disabled/>
        </div>
        <!-- level -->
        <?php 
		$chuoi = <<<EOD
        <select class="form-control" id="level" name="level" required>
          <option value="1" >Administrator</option>
          <option value="2" >User</option>
        </select>
EOD;
		if($_SESSION['level']==1) 
		echo $chuoi;
		?>
        <!-- password -->
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" value="<?php echo @$item['password'];?>" required/>
        </div>
        <!-- verify password -->
        <div class="form-group">
          <label for="verify_password">Re-enter password:</label>
          <input type="password" class="form-control" id="verify_password" name="verify_password" value="<?php echo @$item['verify_password'];?>" required/>
        </div>
        <!-- email -->
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo @$item['email'];?>" required/>
        </div>
        <!-- phone --->
        <div class="form-group">
          <label for="phone">Phone number:</label>
          <input type="number" class="form-control" id="phone" name="phone" value="<?php echo @$item['phone'];?>" required/>
        </div>
        <!-- address -->
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" name="address" value="<?php echo @$item['address'];?>" required/>
        </div>
        <!-- submit -->
        <input class="btn btn-block" type="submit" name="update_user" value="Update User's Info" style="background-color:#38B1D5;color:white;"/>
        <a href="user-delete.php?user_id=<?php echo @$item['user_id'];?>" class="btn btn-block hvr-underline-from-center">Delete User</a>
      </form>
    </div>
    <?php }?>
  </div>
  <!-- end row --> 
</div>
<!-- end body content --> 

<?php include_once("footer.php");?>

</body>
</html>
