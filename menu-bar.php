<!-- NAV BAR 2.4 -->
<div class="row">
<nav class="bmp-navbar">
        <ul>
        <li><a href="index.php">Sam A <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Z</a></li>
        <li><a href="product-type-view.php?glx_type=Galaxy+S">Galaxy S</a></li>
        <li><a href="product-type-view.php?glx_type=Galaxy+Note">Galaxy Note</a></li>
        <li><a href="product-type-view.php?glx_type=Galaxy+Tab">Galaxy Tab</a></li>
        
        <!-- Admin -->
        <?php
		  if(@$_SESSION['level']==1){
 			  echo "
        <li class='dropdown'> <a class='dropdown-toggle text-capitalize' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-user'></span> {$_SESSION['username']} <i class='fa fa-angle-down' aria-hidden='true'></i></a>
          <ul class='dropdown-menu'>
		  	<li style='background-color:red;border-radius:3px;'>Chế độ Admin</li>
            <li><a href='user-list.php'>Danh sách người dùng</a></li>
            <li><a href='product-list.php'>Danh sách sản phẩm</a></li>
			<li><a href='sign-out.php'>Thoát <i class='fa fa-sign-out' aria-hidden='true'></i></a></li>
          </ul>
        </li>";
		  } else if(@$_SESSION['level']==2) {
			  echo "
        <li class='dropdown'> <a class='dropdown-toggle text-capitalize' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-user'></span> {$_SESSION['username']} <i class='fa fa-angle-down' aria-hidden='true'></i></a>
          <ul class='dropdown-menu'>
			<li><a href='sign-out.php'>Thoát <i class='fa fa-sign-out' aria-hidden='true'></i></a></li>
          </ul>
        </li>";
				   }
			   else {
				   echo "<li><a href='sign-in.php' style='margin-left:5px;'>Đăng nhập <i class='fa fa-sign-in' aria-hidden='true'></i></a></li>";
			   }
            ?>
        
      </ul>
      </nav>
</div>