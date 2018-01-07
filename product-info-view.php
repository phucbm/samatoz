<?php
SESSION_START();
//unset($_SESSION['cart'][13]);
include_once("product-function.php");
//unset($_SESSION['cart']);
if(isset($_GET['glx_id'])){
	$id = $_GET['glx_id'];
	$sp = get_glx_by_id($id);
}

?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php foreach(array_slice($sp,0,1) as $item) echo ucwords($item['glx_name_full']);?></title>

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

  <body style="background-color:white">
<!-- BODY -->
<div class="container-fluid" style="padding:0"> 
    
    <?php include_once("menu-bar.php");?>
    
    <!-- navbar product name -->
    <nav class="bmp-navbar-product" data-spy="affix" data-offset-top="180" style="z-index:1">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <?php foreach($sp as $item){?>
        
        
        <form method="post" style="margin-bottom:0px">
        
        <span class="text-capitalize"><?php echo $item['glx_name_full'];?></span> 

            <button type="button" class="btn pull-right" onclick="window.location='product-compare.php?glx_type=<?php echo $item['glx_type'];?>';">SO SÁNH</button>
        
        <?php } ?>
        <?php 
		if(@$_SESSION['level']==1) {
			foreach($sp as $item){
		  		$chuoi = <<<EOD
<!-- nut sua -->
<button type="button" class="btn pull-right" onclick="window.location='product-edit.php?glx_id={$item['glx_id']}';">SỬA</button>
<!-- end nut sua -->
EOD;
			echo $chuoi;}
		
		  }?>
          </form>
      </div>
      </div>
  </nav>
    
    <!-- thong so chi tiet -->
    <div class="bmp-spec">
    <?php foreach($sp as $item){?>
    <!-- color -->
    <div class="row bmp-spec-color tex">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Màu sắc</h6>
          </div>
        <div class="col-lg-3"> <img src="images/<?php echo $item['glx_img_color_1'];?>" alt="<?php echo $item['glx_img_color_1'];?>" class="center-block"/>
            <p><a class='text-capitalize'><?php echo $item['glx_color_1'];?></a></p>
          </div>
        <div class="col-lg-3"> <img src="images/<?php echo $item['glx_img_color_2'];?>" alt="<?php echo $item['glx_img_color_2'];?>" class="center-block"/>
            <p><a class='text-capitalize'><?php echo $item['glx_color_2'];?></a></p>
          </div>
        <?php if($item['glx_img_color_3']!="") echo"
<div class='col-lg-3'>
<img src='images/{$item['glx_img_color_3']}' alt='{$item['glx_img_color_3']}' class='center-block'/>
<p><a class='text-capitalize'>{$item['glx_color_3']}</a></p>
</div>";?>
      </div>
      </div>

    <!-- bo nho -->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Bộ nhớ trong</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p><a><?php echo $item['glx_rom_1'];?></a>GB</p>
            <?php if($item['glx_rom_2']!="") echo "<p><a>{$item['glx_rom_2']}</a>GB</p>";?>
            <?php if($item['glx_memo_card']!="") echo "<p>Thẻ nhớ lên đến <a>{$item['glx_memo_card']}</a>GB</p>";?>
          </div>
      </div>
      </div>
    
    <!-- ram -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>RAM</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p><a><?php echo $item['glx_ram'];?></a>GB</p>
          </div>
      </div>
      </div>
    
    <!-- kich thuoc -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Kích thước và Cân nặng</h6>
          </div>
        <div class="col-lg-7 col-lg-offset-1">
            <table width="100%" border="0">
            <tbody>
                <tr>
                <td>&nbsp;</td>
                <td><p style="text-align:center;margin-bottom:0;padding-top:15px">Ngang: <a><?php echo $item['glx_ngang'];?></a>mm</p></td>
                <td>&nbsp;</td>
              </tr>
                <tr>
                <td><p style="text-align:right">Dài: <a><?php echo $item['glx_dai'];?></a>mm</p></td>
                <td><img src="images/<?php echo $item['glx_img_front'];?>" alt="" class="center-block" height="250"/></td>
                <td><p>Mỏng: <a><?php echo $item['glx_mong'];?></a>mm</p></td>
              </tr>
                <tr>
                <td>&nbsp;</td>
                <td><p style="text-align:center">Nặng: <a><?php echo $item['glx_nang'];?></a>g</p></td>
                <td>&nbsp;</td>
              </tr>
              </tbody>
          </table>
          </div>
      </div>
      </div>
    
    <!-- man hinh -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Kích thước màn hình</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p><a><?php echo $item['glx_scr_size'];?></a> inch</p>
            <p><a><?php echo $item['glx_reso'];?></a></p>
            <p>Super <a class="text-uppercase">AMOLED</a> &reg;</p>
          </div>
      </div>
      </div>
    
    <!-- camera -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Camera</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p>Trước: <a><?php echo $item['glx_cam_front'];?></a> MP</p>
            <p>Sau: <a><?php echo $item['glx_cam_rear'];?></a> MP</p>
            <?php if($item['glx_cam_rec']!="") echo "<p>Quay phim: <a>{$item['glx_cam_rec']}</a></p>";?>
          </div>
      </div>
      </div>
    
    <!-- chip -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Chip</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p><a><?php echo $item['glx_chip'];?></a></p>
          </div>
      </div>
      </div>
    
    <!-- battery -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Pin</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p>Dung lượng <a><?php echo $item['glx_bat_capa'];?></a> mAh</p>
            <p>Thời gian nghe gọi lên đến <a><?php echo $item['glx_bat_call'];?></a> giờ</p>
            <p>Thời gian phát video lên đến <a><?php echo $item['glx_bat_video'];?></a> giờ</p>
            <p>Thời gian nghe nhạc lên đến <a><?php echo $item['glx_bat_music'];?></a> giờ</p>
            <?php if($item['glx_bat_3g']!="") echo "<p>Thời gian sử dụng 3G lên đến <a>{$item['glx_bat_3g']}</a> giờ</p>";?>
            <?php if($item['glx_bat_wifi']!="") echo "<p>Thời gian sử dụng Wifi lên đến <a>{$item['glx_bat_wifi']}</a> giờ</p>";?>
          </div>
      </div>
      </div>
    
    <!-- sencor -->
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-3">
            <h6>Các loại cảm biến</h6>
          </div>
        <div class="col-lg-6 col-lg-offset-1">
            <p><a>Cảm biến vân tay</a></p>
            <p><a>Cảm biến ánh sáng</a></p>
            <p><a>Cảm biến tiệm cận</a></p>
            <p><a>Cảm biến nhịp tim</a></p>
            <p><a>Con quay hồi chuyển</a></p>
          </div>
      </div>
      </div>
    
    <!-- banner --> 
    <img src="images/<?php echo $item['glx_img_banner'];?>" class="center-block img-responsive" width="1366" height="400" alt=""/>
    <?php } ?>
  </div>
    <!-- end spec --> 
    
<?php include_once("footer.php");?>
    
  </div>
<!-- end body content -->

</body>
</html>