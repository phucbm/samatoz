<?php
include_once("database-connect.php");
include_once("references.php");
 
// Hàm lấy tất cả san pham
function get_all_glx()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    connect_db();
    
    // Câu truy vấn lấy tất cả san pham
    $sql = "select * from sanpham";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
    
	 // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) == 0)
	{
	echo "
	<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Chưa có cái gì để hiển thị.</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Thì thôi</a>
					<a class='btn hvr-bounce-to-right' href='product-add.php'>Thêm liền cho máu</a>
				</div>
			</div>
			";
    die();
	}
	else
	{
        while ($row = mysqli_fetch_assoc($query))
            $result[] = $row;
	}
     
    // Trả kết quả về
	disconnect_db();
    return $result;
}
 
// Hàm lấy san pham theo type
function get_glx_by_type($glx_type)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "SELECT * FROM sanpham WHERE glx_type = '$glx_type'";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();

    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) == 0)
	{
	echo "
	<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Chưa có dữ liệu về loại sản phẩm này.</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Quay lại</a>
					<a class='btn hvr-bounce-to-right' href='product-add.php'>Thêm sản phẩm</a>
				</div>
			</div>
			";
    die();
	}
	else
	{
        while ($row = mysqli_fetch_assoc($query))
            $result[] = $row;
	}
    // Trả kết quả về
	disconnect_db();
    return $result;
}

// Hàm lấy san pham theo id
function get_glx_by_id($glx_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "SELECT * FROM sanpham WHERE glx_id = $glx_id";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();

    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
            $result[] = $row;
        
    }else {echo "loi khong lay duoc du lieu--------------";}
     
    // Trả kết quả về
    return $result;
}

// Hàm sửa thong tin san pham ----fail
function update_glx($glx_type ,$glx_name_full ,$glx_name_short ,$glx_name_intro ,$glx_img_front ,$glx_img_banner ,$glx_img_color_1 ,$glx_img_color_2 ,$glx_img_color_3 ,$glx_rom_1 ,$glx_rom_2 ,$glx_memo_card ,$glx_ram ,$glx_dai ,$glx_ngang ,$glx_mong ,$glx_nang ,$glx_scr_size ,$glx_reso ,$glx_chip ,$glx_bat_capa ,$glx_bat_music ,$glx_bat_video ,$glx_bat_call ,$glx_bat_3g ,$glx_bat_wifi ,$glx_cam_front ,$glx_cam_rear ,$glx_cam_rec ,$glx_color_1 ,$glx_color_2 ,$glx_color_3,$glx_id, $glx_price, $glx_buy_fpt, $glx_buy_cps, $glx_buy_tgdd)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
		
	$sql ="UPDATE `sanpham` SET `glx_type` = '$glx_type', `glx_price` = '$glx_price', `glx_name_full` = '$glx_name_full', `glx_name_short` = '$glx_name_short', `glx_name_intro` = '$glx_name_intro', `glx_img_front` = '$glx_img_front', `glx_img_banner` = '$glx_img_banner', `glx_img_color_1` = '$glx_img_color_1', `glx_img_color_2` = '$glx_img_color_2', `glx_img_color_3` = '$glx_img_color_3', `glx_rom_1` = '$glx_rom_1', `glx_rom_2` = '$glx_rom_2', `glx_memo_card` = '$glx_memo_card', `glx_ram` = '$glx_ram', `glx_dai` = '$glx_dai', `glx_ngang` = '$glx_ngang', `glx_mong` = '$glx_mong', `glx_nang` = '$glx_nang', `glx_scr_size` = '$glx_scr_size', `glx_reso` = '$glx_reso', `glx_chip` = '$glx_chip', `glx_bat_capa` = '$glx_bat_capa', `glx_bat_music` = '$glx_bat_music', `glx_bat_video` = '$glx_bat_video', `glx_bat_call` = '$glx_bat_call', `glx_bat_3g` = '$glx_bat_3g', `glx_bat_wifi` = '$glx_bat_wifi', `glx_cam_front` = '$glx_cam_front', `glx_cam_rear` = '$glx_cam_rear', `glx_cam_rec` = '$glx_cam_rec', `glx_color_1` = '$glx_color_1', `glx_color_2` = '$glx_color_2', `glx_color_3` = '$glx_color_3', `glx_buy_fpt` = '$glx_buy_fpt', `glx_buy_cps` = '$glx_buy_cps', `glx_buy_tgdd` = '$glx_buy_tgdd' WHERE `sanpham`.`glx_id` = '$glx_id'";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    if ($query) {
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Hên quá cập nhật thành công $glx_name_full</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Quên chút xíu, sửa lại</a>
					<a class='btn hvr-bounce-to-right' href='product-list.php'>Xem danh sách sản phẩm</a>
				</div>
			</div>
			";
        die();} 
	else {
    echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Ơ đệt lỗi gì thế này @@</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Quay lại coi sao</a>
					<a class='btn hvr-bounce-to-right' href='product-list.php'>Xem danh sách sản phẩm</a>
				</div>
			</div>
			";die();}
	disconnect_db();
    return $query;
}
 
 
 //Hàm xóa glx
function delete_glx($glx_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`glx_id` = $glx_id";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    if ($query) {
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Xóa thành công.</p>
					<a class='btn hvr-bounce-to-right' href='product-list.php'>Về danh sách</a>
				</div>
			</div>
			";
        die();} else
    echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Không xóa được, bị lỗi gì rồi :(</p>
					<a class='btn hvr-bounce-to-right' href='product-list.php'>Về danh sách</a>
				</div>
			</div>
			";
	disconnect_db();
    return $query;
}

// Hàm thêm san pham - success
function add_glx($glx_type ,$glx_name_full ,$glx_name_short ,$glx_name_intro ,$glx_img_front ,$glx_img_banner ,$glx_img_color_1 ,$glx_img_color_2 ,$glx_img_color_3 ,$glx_rom_1 ,$glx_rom_2 ,$glx_memo_card ,$glx_ram ,$glx_dai ,$glx_ngang ,$glx_mong ,$glx_nang ,$glx_scr_size ,$glx_reso ,$glx_chip ,$glx_bat_capa ,$glx_bat_music ,$glx_bat_video ,$glx_bat_call ,$glx_bat_3g ,$glx_bat_wifi ,$glx_cam_front ,$glx_cam_rear ,$glx_cam_rec ,$glx_color_1 ,$glx_color_2 ,$glx_color_3, $glx_price, $glx_buy_fpt, $glx_buy_cps, $glx_buy_tgdd)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
    
	//kiem tra ten san pham co bi trung khong
		 if (mysqli_num_rows(mysqli_query($conn, "SELECT glx_name_short FROM sanpham WHERE glx_name_short='$glx_name_short'"))>0)
    {
        echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Tên sản phẩm bị trùng rồi, hãy nhập lại tên khác đi!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
				</div>
			</div>
			";
		exit;// de khong tai lai trang trong cung mot page
    }
	
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO `sanpham` (`glx_type`, `glx_name_full`, `glx_name_short`, `glx_name_intro`, `glx_img_front`, `glx_img_banner`, `glx_img_color_1`, `glx_img_color_2`, `glx_img_color_3`, `glx_rom_1`, `glx_rom_2`, `glx_memo_card`, `glx_ram`, `glx_dai`, `glx_ngang`, `glx_mong`, `glx_nang`, `glx_scr_size`, `glx_reso`, `glx_chip`, `glx_bat_capa`, `glx_bat_music`, `glx_bat_video`, `glx_bat_call`, `glx_bat_3g`, `glx_bat_wifi`,  `glx_cam_front`, `glx_cam_rear`, `glx_cam_rec`, `glx_color_1`, `glx_color_2`, `glx_color_3`,`glx_price`,`glx_buy_fpt`,`glx_buy_cps`,`glx_buy_tgdd`) 
			VALUES
            ('$glx_type' ,'$glx_name_full' ,'$glx_name_short' ,'$glx_name_intro' ,'$glx_img_front' ,'$glx_img_banner' ,'$glx_img_color_1' ,'$glx_img_color_2' ,'$glx_img_color_3' ,'$glx_rom_1' ,'$glx_rom_2' ,'$glx_memo_card' ,'$glx_ram' ,'$glx_dai' ,'$glx_ngang' ,'$glx_mong' ,'$glx_nang' ,'$glx_scr_size' ,'$glx_reso' ,'$glx_chip' ,'$glx_bat_capa' ,'$glx_bat_music' ,'$glx_bat_video' ,'$glx_bat_call' ,'$glx_bat_3g' ,'$glx_bat_wifi' ,'$glx_cam_front' ,'$glx_cam_rear' ,'$glx_cam_rec' ,'$glx_color_1' ,'$glx_color_2' ,'$glx_color_3','$glx_price','$glx_buy_fpt','$glx_buy_cps','$glx_buy_tgdd')
    ";
     // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    if ($query) {
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Thêm thành công sản phẩm $glx_name_full rồi nha :))))</p>
					<a class='btn hvr-bounce-to-top' href='product-list.php'>Xem danh sách sản phẩm</a>
				</div>
			</div>
			";
        die();} 
	else {
    echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Ơ đệt có biến @@ lỗi không chạy được câu truy vấn</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Quay lại coi sao</a>
					<a class='btn hvr-bounce-to-right' href='product-list.php'>Xem danh sách sản phẩm</a>
				</div>
			</div>
			";die();}
	disconnect_db();
    return $query;
   
}

// hàm thêm vào giỏ hàng
function add_to_cart($glx_id){
	if(!isset($_SESSION['cart'])){
			// nếu chưa có session thì tạo mới và thêm vô
			$_SESSION['cart'] = array();
			$_SESSION['cart']['tongsoluong'] = 1;
			$_SESSION['cart']['sosp'] = 1;
			$_SESSION['cart'][$glx_id] = 1;
		} else {
			// có session thì kiểm tra id có chưa
			$isHas = false;
			foreach($_SESSION['cart'] as $key=>$value){
				if($key==$glx_id){$isHas=true; break;}
			}
			
			if($isHas){
				// nếu có rồi thì tăng số lượng của id đó
				$_SESSION['cart'][$glx_id]++;
			} else {
				// chưa thì thêm và tăng số sp
				$_SESSION['cart'][$glx_id] = 1;
				$_SESSION['cart']['sosp']++;
			}
			
			// tăng tổng sản phẩm
			$_SESSION['cart']['tongsoluong']++;
			
		}
		//print_r($_SESSION['cart']);
}
?>