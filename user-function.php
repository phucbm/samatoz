<?php
include_once("references.php");
include_once("database-connect.php");
 
// Hàm lấy tất cả user
function get_all_user()
{
    // kết nối database
    global $conn;
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from user";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    disconnect_db();
    // Trả kết quả về
    return $result;
}
 
// Hàm lấy user theo id
function get_user_by_id($user_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from user where user_id = {$user_id}";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result[] = $row;
    }
    disconnect_db();
    // Trả kết quả về
    return $result;
}
 

// Hàm sửa thong tin user
function update_user($password,$phone, $email, $address,  $verify_password, $level,$user_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();

    // Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau
    if ( $password != $verify_password )
    {
        echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Password does not match. Please type again!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
				</div>
			</div>
			";
        exit;
    }
	// Chống SQL Injection
    $password = addslashes($password);
    $phone = addslashes($phone);
	$address = addslashes($address);
	$email = addslashes($email);
	$level = addslashes($level);
	
    // Câu truy sửa
    /*$sql = "
            UPDATE 'user' SET
            'password' = '$password',
            'phone' = '$phone',
			'address' = '$address',
			'email' = '$email',
			'level' = '$level'
            WHERE 'user'.'user_id' = '$user_id'
    ";*/
	
	$sql ="UPDATE `user` SET `password` = '$password', `phone` = '$phone', `address` = '$address', `email` = '$email', `level` = '$level' WHERE `user`.`user_id` = '$user_id'";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    if ($query) {
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Account with ID <kbd>$user_id</kbd> has updated successfully!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Re-update</a>
					<a class='btn hvr-bounce-to-right' href='user-list.php'>Go to user list</a>
				</div>
			</div>
			";
        die();} 
	else {
    echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Something wrong! Cannot update!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back to edit user</a>
					<a class='btn hvr-bounce-to-right' href='user-list.php'>Go to user list</a>
				</div>
			</div>
			";}
disconnect_db();
    return $query;
		
}
 
 
// Hàm xóa user
function delete_user($user_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "DELETE FROM `user` WHERE `user`.`user_id` = $user_id";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    if ($query) {
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Xóa thành công.</p>
					<a class='btn hvr-bounce-to-right' href='user-list.php'>Về danh sách người dùng</a>
				</div>
			</div>
			";
        die();} else
    echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Something wrong! Cannot delete user ID:<kbd>$user_id</kbd>!</p>
					<p class='bmp-noti'>SQL: $sql</p>
					<a class='btn hvr-bounce-to-right' href='user-list.php'>Về danh sách người dùng</a>
				</div>
			</div>
			";
	disconnect_db();
    return $query;
}

// Hàm thêm user
function add_user($username, $password, $phone, $email, $address, $verify_password)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $username = addslashes($username);
    $password = addslashes($password);
	$verify_password = addslashes($verify_password);
    $phone = addslashes($phone);
	$address = addslashes($address);
	$email = addslashes($email);
    
	//kiem tra user ton tai chua
		 if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM user WHERE username='$username'"))>0)
    {
        echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Username: <kbd> $username</kbd> has been used. Please choose an other.</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
				</div>
			</div>
			";
		exit;// de khong tai lai trang trong cung mot page
    }
	 // Kiểm tra email nay co nguoi dung chua
    if ( mysqli_num_rows(mysqli_query($conn,"SELECT email FROM user WHERE email='$email'"))>0)
    {
        echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Email: <kbd> $email</kbd> has been used. Please choose an other.</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
				</div>
			</div>
			";
        exit;
    }
    // Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau
    if ( $password != $verify_password )
    {
        echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Password does not match. Please type again!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Go back here</a>
				</div>
			</div>
			"; 
        exit;
    }
	
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO user(username, password, email, phone, address, level) VALUES
            				('$username','$password','$email','$phone','$address',2)
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     		//Lưu tên đăng nhập

	echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Congrats <kbd>$username</kbd>! You've signed up successfully!</p>
					<a class='btn hvr-bounce-to-left' href='sign-in.php'>Sign in here</a>
				</div>
			</div>
			";
	disconnect_db();
        die();
}
 
 
//Ham sign in
function sign_in($username, $password)
{
	    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
	//Khai báo sử dụng session
	@session_start();
	  
		// mã hóa pasword
		//$password = md5($password);
		 
		//Kiểm tra tên đăng nhập có tồn tại không
		$query = mysqli_query($conn,"SELECT username, level, password FROM user WHERE username='$username'");
		if (mysqli_num_rows($query) == 0) {
			echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Tên đăng nhập không tồn tại. Bạn có muốn tạo một tài khoản?</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Không!</a>
					<a class='btn hvr-bounce-to-right' href='sign-up.php'>Ừ đăng ký cho vui :))</a>
				</div>
			</div>
			";
			exit;
		}
		 
		//Lấy mật khẩu trong database ra
		$row = mysqli_fetch_array($query,MYSQLI_BOTH);
		//So sánh 2 mật khẩu có trùng khớp hay không
		if ($password != $row['password']) {
			echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Sai mật khẩu rồi!</p>
					<a class='btn hvr-bounce-to-left' href='javascript:history.go(-1)'>Đăng nhập lại</a>
					<a class='btn hvr-bounce-to-right' href='sign-up.php'>Tạo tài khoản mới</a>
				</div>
			</div>
			"		;
			exit;
		}
		//Lưu tên đăng nhập
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $row['level'];
		
		echo "
			<div class='bmp-noti-bg'>
				<div class='bmp-noti-border'>
					<p class='bmp-noti'>Xin chào, <kbd>$username</kbd></p>";
					if ($row['level']==1) echo "
					<p style='background-color:red;border-radius:3px;padding:15px;color:white;font-size:20px'>Administrator Mode</p>";
					echo "<a class='btn hvr-bounce-to-top' href='index.php'>Đến trang chủ</a>
				</div>
			</div>
			";
		disconnect_db();
		die();
	}
?>