<?php
SESSION_START();
include_once("product-function.php");
$data['glx_type']=$_GET['glx_type'];//lay user_id trong link ra
$type = get_glx_by_type($data['glx_type']);

?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php foreach(array_slice($type,0,1) as $item) echo $item['glx_type'];?></title>

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
  <body>
<!-- BODY -->
<div class="container-fluid" style="padding:0"> 
    
  <?php include_once("menu-bar-fixed.php");?>
    
    <!-- product bar -->
    <div class="row bmp-product-bar">
    <?php 
foreach($type as $item){
	$chuoi =<<<EOD
<!-- mot san pham -->
    <div class="col-lg-1 hvr-underline-reveal" style="vertical-align:bottom">
    	<a href="product-info-view.php?glx_id={$item['glx_id']}"><img src="images/{$item['glx_img_front']}" class="center-block" alt="{$item['glx_img_front']}"/>
        <p class='text-capitalize'>{$item['glx_name_short']}</p>
        </a>
    </div>
<!-- ket thuc sp -->
EOD;
echo $chuoi;
}
?>
  </div>
    <!-- product -->
    <div class="row">
    <?php foreach($type as $item){?>
    <div class="col-lg-12 bmp-name-title">
        <h1 class="text-capitalize"><?php echo @$item['glx_name_full'];?></h1>
        <div class="col-lg-6">
        <h2><?php echo @$item['glx_name_intro'];?></h2>
        <a href="product-info-view.php?glx_id=<?php echo @$item['glx_id'];?>">Xem chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i></a> </div>
        <img src="<?php echo 'images/'.$item['glx_img_banner'];?>" width="1366" height="400" alt="<?php echo $item['glx_img_banner'];?>"/> </div>
    <?php }?>
  </div>
    <!-- end body content --> 
    
<?php include_once("footer.php");?>

  </div>
</body>
</html>