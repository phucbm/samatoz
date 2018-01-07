<?php
SESSION_START();
if(@$_SESSION['level']==1){
	include_once("user-function.php");
	$users = get_all_user();
	
}
else {
	header("location:sign-in.php");
	exit;
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
<div class="container-fluid" style="padding:0"> 

  <?php include_once("menu-bar.php");?>
  
  <!-- navbar list -->
  <nav class="bmp-navbar-product" data-spy="affix" data-offset-top="180" style="z-index:1">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1"> <span class="text-capitalize">Danh sách Người dùng</span>
        <button class="btn pull-right" onclick="window.location='sign-up.php';" />
        THÊM NGƯỜI DÙNG MỚI
        </button>
      </div>
    </div>
  </nav>
  <!-- BODY -->
  
  <div class="bmp-list-product">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Username</th>
              <th>Level</th>
              <th>Phone number</th>
              <th>Email</th>
              <th>Address</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $stt=1; foreach($users as $item){?>
            <tr>
              <td><?php echo @$stt++;?></td>
              <td><?php echo @$item['user_id'];?></td>
              <td><?php echo @$item['username'];?></td>
              <td><?php if(@$item['level']==1)
					echo "Administrator";
					else echo "User";
					?></td>
              <td><?php echo @$item['phone'];?></td>
              <td><?php echo @$item['email'];?></td>
              <td><?php echo @$item['address'];?></td>
              <td><a href="user-edit.php?user_id=<?php echo @$item['user_id'];?>">Edit</a></td>
              <td><a href="user-delete.php?user_id=<?php echo @$item['user_id'];?>">Delete</a></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row --> 
  <!-- end row --> 
  
  <!-- end body content --> 
  
<?php include_once("footer.php");?>

</div>
</body>
</html>