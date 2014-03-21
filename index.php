<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Trang chủ Góc tâm sự - Lắng nghe những sẻ chia</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" href="css/homestyle.css"  />
		<link rel="shortcut icon" href="image/logo.png"  />
    <script language="javascript" src="javascript/slide.js"></script>
    <link rel="stylesheet"href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" />   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="javascript/containtSliders.js"></script>
    <script src="javascript/jquery-ui-1.7.2.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/signupStyle.css" /> 
</head>

<body>
    <!--Header-->
    <header>
      <a href="index.php"><img class="logo" src="image/logo.png" alt="logo" width="78px" height="78px" /></a>	
      <?php
				if(isset($_SESSION['user_curr']))
				{
					echo "Chào mừng: ".$_SESSION['user_curr']."";
					echo '<a href="logout.php">Đăng xuất</a>';
				}
				else
				{
					print<<<EOP
						<form class="loginForm" method="post" action="checkLogin.php">
							<input type="type" class="styleBox" name="userLogin" placeholder="Tên đăng nhập"/>
							<input type="password" class="styleBox" name="passLogin" placeholder="Mật khẩu" />
							<input type="submit" class="submitButton" style="border-radius:5px 5px 5px 5px;width:100px;height:30px;" name="button_Login" value="Đăng nhập"/>
							<br />
						<a href="#signupAcc" style="padding-left:350px;font-size:15px;color:white;">Đăng ký</a>
						</form>
EOP;
				}
			?>
      
  </header>
  
      
	<div id="body">
    <div id="featured" >
        <!--==========THUMBNAIL SHOWCASE==========-->
        <div id="thumb">
            <ul>
                <li class="ui-tabs-selected" id="nav-fragment-1">
                    <a href="#fragment-1">
                        <img src="images/containtSlider/thumb/1.jpg" alt="" />
                        <p>Gia đình:
                        <span>Tôi sinh ra trong một gia đình nghèo...</span></p>
                    </a>
                </li>
                <li  id="nav-fragment-2">
                    <a href="#fragment-2">
                        <img src="images/containtSlider/thumb/2.jpg" alt="" />
                        <p>Tình yêu:
                        <span>Tôi và cô ấy yêu nhau đã được 2 năm...</span></p>
                    </a>
                </li>
                <li  id="nav-fragment-3">
                    <a href="#fragment-3">
                        <img src="images/containtSlider/thumb/3.jpg" alt="" />
                        <p>Tình bạn:
                        <span>Đố ai định nghĩa được tình bạn....</span></p>
                    </a>
                </li>
                <li  id="nav-fragment-4">
                    <a href="#fragment-4">
                        <img src="images/containtSlider/thumb/1.jpg" alt="" />
                        <p>Học tập:
                        <span>Trượt ĐH, tôi như lâm vào bước đường cùng...</span></p>
                    </a>
                </li>
                <li  id="nav-fragment-5">
                    <a href="#fragment-5">
                        <img src="images/containtSlider/thumb/2.jpg" alt="" />
                        <p>Xã hội:
                        <span>Đạo đức của thanh niên ngày càng xuống cấp...</span></p>
                    </a>
                </li>
                <li  id="nav-fragment-6">
                    <a href="#fragment-6">
                        <img src="images/containtSlider/thumb/3.jpg" alt="" />
                        <p>Thầm kín:
                        <span>Tôi và anh ấy đã chót....</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="leftArrow"><img src="images/containtSlider/left-arrow.gif" alt="PREV" /></div>
        <div id="rightArrow"><img src="images/containtSlider/right-arrow.gif" alt="NEXT" /></div>
        <!--==========END THUMBNAIL SHOWCASE==========-->
        
        <!--==========TRUE SIZE IMAGES SHOWCASE==========-->        
        <div id="fragment-1" class="ui-tabs-panel" style="">
          <img src="images/containtSlider/large/1.jpg" alt="" />
        </div>
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
          <img src="images/containtSlider/large/2.jpg" alt="" />
        </div>
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
          <img src="images/containtSlider/large/3.jpg" alt="" />
        </div>
        <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
          <img src="images/containtSlider/large/1.jpg" alt="" />
        </div>
        <div id="fragment-5" class="ui-tabs-panel ui-tabs-hide" style="">
          <img src="images/containtSlider/large/2.jpg" alt="" />
        </div>
        <div id="fragment-6" class="ui-tabs-panel ui-tabs-hide" style="">
          <img src="images/containtSlider/large/3.jpg" alt="" />
        </div>
        <!--==========TRUE SIZE IMAGES SHOWCASE==========-->        
  	</div>
  </div><!--End #body-->
  
  <div class="underDiv"> <!-- Phần thân trang --> 
          <a href="#yourSpace" name="yourSpace" style="text-decoration:none;outline:none"><h1 style="color:#FFF">Góc của bạn</h1></a>
          <br />
          <div id="giadinh"><a href="giadinh.html"><img src="image/chuyenmuc.jpg" /></a></div>
          <div id="tinhyeu"><a href="tinhyeu.html"><img src="image/chuyenmuc.jpg" /></a></div>
          <div id="tinhban"><a href="tinhban.html"><img src="image/chuyenmuc.jpg" /></a></div>
          <div id="hoctap"><a href="hoctap.html"><img src="image/chuyenmuc.jpg" /></a></div>
          <div id="xahoi"><a href="xahoi.html"><img src="image/chuyenmuc.jpg" /></a></div>
          <div id="thamkin"><a href="thamkin.html"><img src="image/chuyenmuc.jpg" /></a></div>
  </div>
  
  	<div align="center">
    	<a name="signupAcc"></a>
    	<?php
				if(!isset($_SESSION['user_curr']))
				{
					print<<<EOP
					<form method="post" action="registerPage.php" id="msform">
						<ul id="progressbar">
							<li class="active" style="font-size:17px;font-weight:700">Tài Khoản</li>
								<li style="font-size:17px;font-weight:700">Email</li>
								<li style="font-size:17px;font-weight:700">Thông Tin</li>
						</ul>
						<fieldset>
						<h2 class="fs-title">ĐĂNG KÝ THÀNH VIÊN</h2>
						<input type="text" name="username" placeholder="Tài khoản" />
						<input type="password" name="password" placeholder="Mật khẩu"  />
						<input type="password" name="rePassword" placeholder="Nhập lại mật khẩu"  />
						<input type="button" name="next" class="next action-button" value="Tiếp theo" />
						</fieldset>
						<fieldset>
						<h2 class="fs-title"></h2>
						<input type="text" name="email" placeholder="Email"  />
						<input type="text" name="facebook" placeholder="Facebook"  />
						<input type="text" name="gplus" placeholder="Google Plus"  />
						<input type="button" name="previous" class="previous action-button" value="Quay lại" />
						<input type="button" name="next" class="next action-button" value="Tiếp theo" />
						</fieldset>
						<fieldset>
						<h2 class="fs-title">Thông tin cá nhân</h2>
						<input type="text" name="name" placeholder="Họ tên"/>
						<input type="date" name="birthday" placeholder="Ngày sinh"/>
						<input type="text" name="phone" placeholder="Số điện thoại"  />
						<input type="button" name="previous" class="previous action-button" value="Quay lại" />
						<input type="submit" name="next" class="submit action-button" value="Hoàn tất" />
						</fieldset>
					</form>
EOP;
				}
				
			?>
    <!-- jQuery -->
    
    <!-- jQuery easing plugin -->
    <script src="jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="javascript/multiSignupScript.js"></script>
	</div>
</body>
</html>