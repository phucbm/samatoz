<?php
SESSION_START();
include_once("product-function.php");
$type = get_glx_by_type($_GET['glx_type']);

?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>So sánh dòng <?php foreach(array_slice($type,0,1) as $item) echo $item['glx_type'];?></title>

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
  
  <h1 class="text-center" style="padding:60px 0;">So sánh sản phẩm dòng <?php echo $_GET['glx_type'];?></h1>
  <!-- navbar compare product name -->
  <nav class="bmp-navbar-product" data-spy="affix" data-offset-top="180" style="z-index:1;padding:0;">
    <div class="row bmp-product-bar" style="background-color:white">
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class='col-lg-2 text-capitalize'> <?php echo $item['glx_name_short'];?> </div>
      <?php } ?>
    </div>
  </nav>
  
  <!-- so sanh -->
  <div class="bmp-compare"> 
    <!-- hinh -->
    <div class="row">
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2" style="vertical-align:bottom"> <img src="images/<?php echo $item['glx_img_front'];?>"> </div>
      <?php }?>
    </div>
    <!-- color -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Màu sắc</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2 text-capitalize">
        <table>
          <tr>
            <td><?php echo $item['glx_color_1'];?></td>
          </tr>
          <tr>
            <td><?php echo $item['glx_color_2'];?></td>
          </tr>
          <tr>
            <td><?php echo $item['glx_color_3'];?></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- info -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Giới thiệu</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><?php echo $item['glx_name_intro'];?></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- capacity -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Bộ nhớ và Giá</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><?php echo $item['glx_rom_1'];?>GB - <?php echo number_format($item['glx_price']);?></td>
          </tr>
          <?php if($item['glx_rom_2']!="") {$item['glx_price']*=1.1; echo "<tr><td>{$item['glx_rom_2']}GB - ".number_format($item['glx_price'])."</td></tr>";}?>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- ram -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Ram</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><?php echo $item['glx_ram'];?>GB</td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- man hinh -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Hiển thị</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><?php echo $item['glx_reso'];?></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- kich thuoc -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Kích cỡ và Trọng lượng</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          
            <th>Chiều cao</th>
          <tr>
            <td><?php echo $item['glx_dai'];?> mm</td>
          </tr>
          
            <th>Chiều ngang</th>
          <tr>
            <td><?php echo $item['glx_ngang'];?> mm</td>
          </tr>
          
            <th>Độ mỏng</th>
          <tr>
            <td><?php echo $item['glx_mong'];?> mm</td>
          </tr>
          
            <th>Trọng lượng</th>
          <tr>
            <td><?php echo $item['glx_nang'];?> g</td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- chip -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Vi xử lý</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><?php echo $item['glx_chip'];?></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- camera -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Camera</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          
            <th>Trước</th>
          <tr>
            <td><?php echo $item['glx_cam_front'];?></td>
          </tr>
          
            <th>Sau</th>
          <tr>
            <td><?php echo $item['glx_cam_rear'];?></td>
          </tr>
          
            <th>Quay video</th>
          <tr>
            <td><?php echo $item['glx_cam_rec'];?></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- pin -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">Pin</div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          
            <th>Dung lượng</th>
          <tr>
            <td><?php echo $item['glx_bat_capa'];?> mAh</td>
          </tr>
          
            <th>Thời gian nghe và gọi</th>
          <tr>
            <td><?php echo $item['glx_bat_call'];?> giờ</td>
          </tr>
          
            <th>Thời gian xem video</th>
          <tr>
            <td><?php echo $item['glx_bat_video'];?> giờ</td>
          </tr>
          
            <th>Thời gian nghe nhạc</th>
          <tr>
            <td><?php echo $item['glx_bat_music'];?> giờ</td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
    <!-- link chi tiet -->
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1"></div>
      <?php foreach(array_slice($type,0,5) as $item){?>
      <div class="col-lg-2">
        <table>
          <tr>
            <td><a href="product-info-view.php?glx_id=<?php echo $item['glx_id'];?>">Chi tiết cấu hình <i class="fa fa-chevron-right" aria-hidden="true"></i></a></td>
          </tr>
        </table>
      </div>
      <?php }?>
    </div>
  </div>
  
<?php include_once("footer.php");?>

</div>
<!-- end body content -->

</body>
</html>