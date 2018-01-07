<?php
SESSION_START();
if(@$_SESSION['level']==1){
include_once("product-function.php");
@$glx_id=$_GET['glx_id'];//lay user_id trong link ra
$id = get_glx_by_id($glx_id);

// Nếu người dùng submit form
if (!empty($_POST['update_glx']))
{
    // Lay data
	$data['glx_id']=$_GET['glx_id'];
    $data['glx_type'] = $_POST['glx_type'];
	$data['glx_name_full'] = $_POST['glx_name_full'];
	$data['glx_name_short'] = $_POST['glx_name_short'];
    $data['glx_name_intro'] = $_POST['glx_name_intro'];
    $data['glx_img_front'] = $_POST['glx_img_front'];
	$data['glx_img_banner'] = $_POST['glx_img_banner'];
    $data['glx_img_color_1'] = $_POST['glx_img_color_1'];
	$data['glx_img_color_2'] = $_POST['glx_img_color_2'];
	$data['glx_img_color_3'] = $_POST['glx_img_color_3'];
	$data['glx_rom_1'] = $_POST['glx_rom_1'];
    $data['glx_rom_2'] = $_POST['glx_rom_2'];
    $data['glx_memo_card'] = $_POST['glx_memo_card'];
	$data['glx_ram'] = $_POST['glx_ram'];
    $data['glx_dai'] = $_POST['glx_dai'];
	$data['glx_ngang'] = $_POST['glx_ngang'];
	$data['glx_mong'] = $_POST['glx_mong'];
	$data['glx_nang'] = $_POST['glx_nang'];
    $data['glx_scr_size'] = $_POST['glx_scr_size'];
    $data['glx_reso'] = $_POST['glx_reso'];
	$data['glx_chip'] = $_POST['glx_chip'];
    $data['glx_bat_capa'] = $_POST['glx_bat_capa'];
	$data['glx_bat_music'] = $_POST['glx_bat_music'];
	$data['glx_bat_video'] = $_POST['glx_bat_video'];
	$data['glx_bat_call'] = $_POST['glx_bat_call'];
    $data['glx_bat_3g'] = $_POST['glx_bat_3g'];
    $data['glx_bat_wifi'] = $_POST['glx_bat_wifi'];
	$data['glx_cam_front'] = $_POST['glx_cam_front'];
	$data['glx_cam_rear'] = $_POST['glx_cam_rear'];
	$data['glx_cam_rec'] = $_POST['glx_cam_rec'];
    $data['glx_color_1'] = $_POST['glx_color_1'];
    $data['glx_color_2'] = $_POST['glx_color_2'];
	$data['glx_color_3'] = $_POST['glx_color_3'];
	$data['glx_price'] = $_POST['glx_price'];
	$data['glx_buy_fpt']=$_POST['glx_buy_fpt'];
	$data['glx_buy_cps']=$_POST['glx_buy_cps'];
	$data['glx_buy_tgdd']=$_POST['glx_buy_tgdd'];

    // Neu ko co loi thi insert
        update_glx($data['glx_type'] ,$data['glx_name_full'] ,$data['glx_name_short'] ,$data['glx_name_intro'] ,$data['glx_img_front'] ,$data['glx_img_banner'] ,$data['glx_img_color_1'] ,$data['glx_img_color_2'] ,$data['glx_img_color_3'] ,$data['glx_rom_1'] ,$data['glx_rom_2'] ,$data['glx_memo_card'] ,$data['glx_ram'] ,$data['glx_dai'] ,$data['glx_ngang'] ,$data['glx_mong'] ,$data['glx_nang'] ,$data['glx_scr_size'] ,$data['glx_reso'] ,$data['glx_chip'] ,$data['glx_bat_capa'] ,$data['glx_bat_music'] ,$data['glx_bat_video'] ,$data['glx_bat_call'] ,$data['glx_bat_3g'] ,$data['glx_bat_wifi'] ,$data['glx_cam_front'] ,$data['glx_cam_rear'] ,$data['glx_cam_rec'] ,$data['glx_color_1'] ,$data['glx_color_2'] ,$data['glx_color_3'],$data['glx_id'], $data['glx_price'],$data['glx_buy_fpt'],$data['glx_buy_cps'],$data['glx_buy_tgdd']);
        // Trở về trang danh sách

}

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
  <title>Sửa <?php foreach(array_slice($id,0,1) as $item) echo $item['glx_name_short'];?></title>

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
    
    <!-- navbar ADD Product -->
    <nav class="bmp-navbar-product" data-spy="affix" data-offset-top="180" style="z-index:1">
    <div class="row">
    <div class="col-lg-7 col-lg-offset-2">
    <?php foreach($id as $item){?>
    <span>Đang sửa sản phẩm: <b class="text-capitalize"><?php echo $item['glx_name_full'];?></b><span></div>
    <div class="col-lg-1">
    <form role="form" method="post">
    <input class="btn pull-right" type="submit" name="update_glx" value="LƯU LẠI"/>
    </div>
    </div>
    </nav>
    
    <!-- form here -->
    
    <div class="bmp-add-box">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="col-lg-7">
        <h6>Tên sản phẩm</h6>
        <!-- 1 ma loai -->
        <div class="form-group">
        <label for="glx_type">Chọn dòng sản phẩm:</label>
        <select class="form-control" id="glx_type" name="glx_type" required>
            <option value="Galaxy S" <?php if($item['glx_type']=="Galaxy S") echo "selected";?> >Galaxy S</option>
            <option value="Galaxy Note" <?php if($item['glx_type']=="Galaxy Note") echo "selected";?> >Galaxy Note</option>
            <option value="Galaxy Tab" <?php if($item['glx_type']=="Galaxy Tab") echo "selected";?> >Galaxy Tab</option>
          </select>
      </div>
        <!-- 3 short name -->
        <div class="form-group">
        <label for="glx_name_short">Tên ngắn gọn:</label>
        <input type="text" class="form-control" id="glx_name_short" name="glx_name_short" maxlength="10" placeholder="Giới hạn 10 kí tự - S7 active | Note 5" value="<?php echo $item['glx_name_short'];?>" required>
      </div>
        <!-- 4 full name -->
        <div class="form-group">
        <label for="glx_name_full">Tên đầy đủ:</label>
        <input type="text" class="form-control" id="glx_name_full" name="glx_name_full" maxlength="50" placeholder="Giới hạn 50 kí tự - Samsung Galaxy Note Edge" value="<?php echo $item['glx_name_full'];?>" required>
      </div>
        <!-- price -->
        <div class="form-group">
        <label for="glx_price">Giá:</label>
        <input type="number" class="form-control" id="glx_price" name="glx_price" maxlength="50" placeholder="Price" value="<?php echo $item['glx_price'];?>" required>
      </div>
        <!-- 5 cau gioi thieu -->
        <div class="form-group">
        <label for="glx_name_intro">Câu giới thiệu:</label>
        <input type="text" class="form-control" id="glx_name_intro" name="glx_name_intro" maxlength="100" placeholder="Giới hạn 200 kí tự - Camera Dual Pixel 12MP. Màn hình cong 2K rực rỡ." value="<?php echo $item['glx_name_intro'];?>" required>
      </div>
        <h6>Hình ảnh và Màu sắc</h6>
        <!-- 2 image front -->
        <div class="form-group">
        <label for="glx_img_front">Hình mặt trước:</label>
        <input type="text" class="form-control" id="glx_img_front" name="glx_img_front" maxlength="100" placeholder="Example: front-320x600.png" value="<?php echo $item['glx_img_front'];?>">
      </div>
        <!-- 6 image banner -->
        <div class="form-group">
        <label for="glx_img_banner">Banner sản phẩm:</label>
        <input type="text" class="form-control" id="glx_img_banner" name="glx_img_banner" maxlength="100" placeholder="Example: s7-1366x400.png" value="<?php echo $item['glx_img_banner'];?>">
      </div>
        <!-- 10 hình mau 1 -->
        <div class="form-group">
        <label for="glx_img_color_1">Hình màu 1:</label>
        <input type="text" class="form-control" id="glx_img_color_1" name="glx_img_color_1" maxlength="100" placeholder="Example: s7-320x600.png" value="<?php echo $item['glx_img_color_1'];?>">
      </div>
        <!-- 11 hình mau 2 -->
        <div class="form-group">
        <label for="glx_img_color_2">Hình màu 2:</label>
        <input type="text" class="form-control" id="glx_img_color_2" name="glx_img_color_2" maxlength="100" placeholder="Example: s7-320x600.png" value="<?php echo $item['glx_img_color_2'];?>">
      </div>
        <!-- 12 hình mau 3 -->
        <div class="form-group">
        <label for="glx_img_color_3">Hình màu 3:</label>
        <input type="text" class="form-control" id="glx_img_color_3" name="glx_img_color_3" maxlength="100" placeholder="Example: s7-320x600.png" value="<?php echo $item['glx_img_color_3'];?>">
      </div>
        <!-- 7 ten mau 1 -->
        <div class="form-group">
        <label for="glx_color_1">Tên màu 1:</label>
        <input type="text" class="form-control" id="glx_color_1" name="glx_color_1" maxlength="20" placeholder="Giới hạn 20 kí tự - Rose Gold" value="<?php echo $item['glx_color_1'];?>" required>
      </div>
        <!-- 8 ten mau 2 -->
        <div class="form-group">
        <label for="glx_color_2">Tên màu 2:</label>
        <input type="text" class="form-control" id="glx_color_2" name="glx_color_2" maxlength="20" placeholder="Giới hạn 20 kí tự - Black Onyx" value="<?php echo $item['glx_color_2'];?>" >
      </div>
        <!-- 9 ten mau 3 -->
        <div class="form-group">
        <label for="glx_color_3">Tên màu 3:</label>
        <input type="text" class="form-control" id="glx_color_3" name="glx_color_3" maxlength="20" placeholder="Giới hạn 20 kí tự - Pearl White" value="<?php echo $item['glx_color_3'];?>" >
      </div>
        <h6>Bộ nhớ</h6>
        <!-- 13 bo nho 1 -->
        <div class="form-group">
        <label for="glx_rom_1">Bộ nhớ trong 1:</label>
        <input type="number" class="form-control" id="glx_rom_1" name="glx_rom_1" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số - 32" value="<?php echo $item['glx_rom_1'];?>" required>
      </div>
        <!-- 14 bo nho 2 -->
        <div class="form-group">
        <label for="glx_rom_2">Bộ nhớ trong 2:</label>
        <input type="number" class="form-control" id="glx_rom_2" name="glx_rom_2" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số - 64" value="<?php echo $item['glx_rom_2'];?>">
      </div>
        <!-- 15 the nho -->
        <div class="form-group">
        <label for="glx_memo_card">Hỗ trợ thẻ nhớ:</label>
        <input type="number" class="form-control" id="glx_memo_card" name="glx_memo_card" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số - 200 (Đơn vị GB) | tùy chọn" value="<?php echo $item['glx_memo_card'];?>" >
      </div>
        <!-- 16 ram -->
        <div class="form-group">
        <label for="glx_ram">RAM:</label>
        <input type="number" class="form-control" id="glx_ram" name="glx_ram" maxlength="3" min="0" placeholder="Giới hạn 3 chữ số - 3 (đơn vị GB)" value="<?php echo $item['glx_ram'];?>" required>
      </div>
        <h6>Kích thước</h6>
        <!-- 17 dai -->
        <div class="form-group">
        <label for="glx_dai">Chiều dài:</label>
        <input type="text" class="form-control" id="glx_dai" name="glx_dai" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 5.1 (đơn vị Inch)" value="<?php echo $item['glx_dai'];?>" required>
      </div>
        <!-- 18 ngang -->
        <div class="form-group">
        <label for="glx_ngang">Chiều ngang:</label>
        <input type="text" class="form-control" id="glx_ngang" name="glx_ngang" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 3.21 (đơn vị Inch)" value="<?php echo $item['glx_ngang'];?>" required>
      </div>
        <!-- 19 mong -->
        <div class="form-group">
        <label for="glx_mong">Độ mỏng:</label>
        <input type="text" class="form-control" id="glx_mong" name="glx_mong" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 0.32 (đơn vị Inch)" value="<?php echo $item['glx_mong'];?>" required>
      </div>
        <!-- 20 nang -->
        <div class="form-group">
        <label for="glx_nang">Khối lượng:</label>
        <input type="text" class="form-control" id="glx_nang" name="glx_nang" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 152 (đơn vị Gram)" value="<?php echo $item['glx_nang'];?>" required>
      </div>
        <!-- 21 man hinh rong -->
        <div class="form-group">
        <label for="glx_scr_size">Kích thước màn hình:</label>
        <input type="text" class="form-control" id="glx_scr_size" name="glx_scr_size" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 5.1 (đơn vị Inch)" value="<?php echo $item['glx_scr_size'];?>" required>
      </div>
        <!-- 22 do phan giai -->
        <div class="form-group">
        <label for="glx_reso">Độ phân giải:</label>
        <input type="text" class="form-control" id="glx_reso" name="glx_reso" maxlength="20" placeholder="2540x1440(2K)" value="<?php echo $item['glx_reso'];?>" required>
      </div>
        <h6>Chip và Pin</h6>
        <!-- 23 chip -->
        <div class="form-group">
        <label for="glx_chip">Chip:</label>
        <input type="text" class="form-control" id="glx_chip" name="glx_chip" maxlength="50" placeholder="Giới hạn 50 kí tự - 2.5Ghz 8 lõi" value="<?php echo $item['glx_chip'];?>" required>
      </div>
        <!-- 24 dung luong pin -->
        <div class="form-group">
        <label for="glx_bat_capa">Dung lượng pin:</label>
        <input type="number" class="form-control" id="glx_bat_capa" name="glx_bat_capa" maxlength="5" min="1" placeholder="Giới hạn 5 chữ số - 3200 (đơn vị mAh)" value="<?php echo $item['glx_bat_capa'];?>" required>
      </div>
        <!-- 25 dung luong 3g -->
        <div class="form-group">
        <label for="glx_bat_3g">Thời gian sử dụng 3G:</label>
        <input type="number" class="form-control" id="glx_bat_3g" name="glx_bat_3g" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số - 32 (giờ)" value="<?php echo $item['glx_bat_3g'];?>" required>
      </div>
        <!-- 26 dung luong wifi -->
        <div class="form-group">
        <label for="glx_bat_wifi">Thời gian sử dụng wifi:</label>
        <input type="number" class="form-control" id="glx_bat_wifi" name="glx_bat_wifi" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số" value="<?php echo $item['glx_bat_wifi'];?>" required>
      </div>
        <!-- 27 dung luong nghe nhac -->
        <div class="form-group">
        <label for="glx_bat_music">Thời gian nghe nhạc:</label>
        <input type="number" class="form-control" id="glx_bat_music" name="glx_bat_music" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số" value="<?php echo $item['glx_bat_music'];?>" required>
      </div>
        <!-- 28 dung luong video -->
        <div class="form-group">
        <label for="glx_bat_video">Thời gian xem video:</label>
        <input type="number" class="form-control" id="glx_bat_video" name="glx_bat_video" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số" value="<?php echo $item['glx_bat_video'];?>" required>
      </div>
        <!-- 29 dung luong gọi -->
        <div class="form-group">
        <label for="glx_bat_call">Thời gian nghe và gọi:</label>
        <input type="number" class="form-control" id="glx_bat_call" name="glx_bat_call" maxlength="3" min="1" placeholder="Giới hạn 3 chữ số" value="<?php echo $item['glx_bat_call'];?>" required>
      </div>
        <h6>Camera</h6>
        <!-- 31 cam truoc -->
        <div class="form-group">
        <label for="glx_cam_front">Camera trước:</label>
        <input type="text" class="form-control" id="glx_cam_front" name="glx_cam_front" maxlength="20" placeholder="Giới hạn 20 kí tự - CMOS 5MP" value="<?php echo $item['glx_cam_front'];?>" required>
      </div>
        <!-- 32 cam sau -->
        <div class="form-group">
        <label for="glx_cam_rear">Camera sau:</label>
        <input type="text" class="form-control" id="glx_cam_rear" name="glx_cam_rear" maxlength="20" placeholder="Giới hạn 20 kí tự - Dual Pixel 12MP" value="<?php echo $item['glx_cam_rear'];?>" required>
      </div>
        <!-- 33 quay phim -->
        <div class="form-group">
        <label for="glx_cam_rec">Quay phim:</label>
        <input type="text" class="form-control" id="glx_cam_rec" name="glx_cam_rec" maxlength="50" placeholder="Giới hạn 50 kí tự - UHD 4K@60fps" value="<?php echo $item['glx_cam_rec'];?>" required>
      </div>
        <h6>Link mua sản phẩm</h6>
        <!-- fpt -->
        <div class="form-group">
        <label for="glx_buy_fpt">FPT Shop:</label>
        <input type="url" class="form-control" id="glx_buy_fpt" name="glx_buy_fpt" maxlength="200" placeholder="Paste link mua hàng FPT vào đây."value="<?php echo $item['glx_buy_fpt'];?>" required>
      </div>
        <!-- cellphones -->
        <div class="form-group">
        <label for="glx_buy_cps">Cellphone S:</label>
        <input type="url" class="form-control" id="glx_buy_cps" name="glx_buy_cps" maxlength="200" placeholder="Paste link mua hàng Cellphone S vào đây."value="<?php echo $item['glx_buy_cps'];?>" required>
      </div>
        <!-- thegioididong -->
        <div class="form-group">
        <label for="glx_buy_tgdd">Thế giới di động:</label>
        <input type="url" class="form-control" id="glx_buy_tgdd" name="glx_buy_tgdd" maxlength="200" placeholder="Paste link mua hàng Thế giới di động vào đây."value="<?php echo $item['glx_buy_tgdd'];?>" required>
      </div>
        <!-- submit -->
        <input class="btn btn-block" type="submit" name="update_glx" value="SỬA NGAY VÀ LUÔN"/>
      </div>
  </form>
    <?php }?>
    <div class="col-lg-5">
    <h6>Mẫu ví dụ</h6>
    <img src="images/example-add/type-view.PNG" alt=""/> <img src="images/example-add/color.PNG" alt="" style="margin-top:120px"/> <img src="images/example-add/bo-nho.PNG" alt="" style="margin-top:400px"/> <img src="images/example-add/kich-thuoc.PNG" alt="" style="margin-top:150px"/> <img src="images/example-add/chip-pin.PNG" alt="" style="margin-top:300px"/> <img src="images/example-add/cam-bien.PNG" alt="" style="margin-top:280px"/> <img src="images/example-add/cam.PNG" alt=""/> </div>
  </div>
</div>
</div>

<!-- end form --> 

<?php include_once("footer.php");?>

</div>
<!-- end body content -->

</body>
</html>