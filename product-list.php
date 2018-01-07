<?php
SESSION_START();
if(@$_SESSION['level']==1){
include_once("product-function.php");
$product = get_all_glx();

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
  <title>Danh sách sản phẩm</title>

  <?php include_once("references.php");?>
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

<body style="background-color:#E1E1E1">
<!-- BODY -->
<div class="container-fluid" style="padding:0"> 
  
  <?php include_once("menu-bar.php");?>
  
  <!-- navbar list -->
  <nav class="bmp-navbar-product" data-spy="affix" data-offset-top="180" style="z-index:1">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1"> <span class="text-capitalize">Danh sách sản phẩm Galaxy</span>
        <button class="btn pull-right" onclick="window.location='product-add.php';" />
        THÊM SẢN PHẨM MỚI
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
              <th>Ảnh</th>
              <th>Tên</th>
              <th>Giá (VNĐ)</th>
              <th>Loại</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            <?php
				$stt=1;
				foreach($product as $item){?>
            <tr>
              <td><?php echo $stt++;?></td>
              <td><?php echo @$item['glx_id'];?></td>
              <td><img class="center-block" src="<?php echo "image".@$item['glx_img_front'];?>"></td>
              <td class="text-capitalize"><?php echo @$item['glx_name_full'];?></td>
              <td><?php echo number_format(@$item['glx_price']);?></td>
              <td><?php echo @$item['glx_type'];?></td>
              <td><a href="product-edit.php?glx_id=<?php echo $item['glx_id']?>" class="btn">Sửa</a></td>
              <td><a href="product-delete.php?glx_id=<?php echo $item['glx_id']?>" class="btn">Xóa</a></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row --> 
  
<?php include_once("footer.php");?>

</div>
<!-- end body content -->
</body>
</html>