<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/imgCapsFor4rum.css"/>
  <link rel="stylesheet" media="all" href="css/homestyle.css"  />
  <link rel="stylesheet" type="text/css" media="all" href="css/signupStyle.css" /> 
  <link rel="shortcut icon" href="images/logo.png"  />	
  <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trang chủ Góc tâm sự - Lắng nghe những sẻ chia</title>
  <script language="javascript" src="javascript/slide.js"></script>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src="javascripts/containtSliders.js"></script>
  <script src="javascripts/jquery-ui-1.7.2.custom.min.js"></script>
</head>

<body>
    <!--Header-->
    <header>
      <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" width="82px" height="82px" /></a>
      <?php
				if(isset($_SESSION['user_curr']))
				{
					print<<<EOP
					<form class = "loginOk" method="post" action="">
						<p style="font-size:15px;color:white;">{$_SESSION['name']}</p>
						<br />					
					<a href="logout.php" style="font-size:15px;color:red;centre;text-decoration:none;">Đăng xuất</a>
					</form>
EOP;
				}
				else
				{
					print<<<EOP
						<form class="loginForm" method="post" action="checkLogin.php">
							<input type="type" class="styleBox" name="userLogin" placeholder="Tên đăng nhập" required/>
							<input type="password" class="styleBox" name="passLogin" placeholder="Mật khẩu" required/>
							<input type="submit" class="submitButton" style="border-radius:5px 5px 5px 5px;width:100px;height:30px;" name="button_Login" value="Đăng nhập"/>
							<br />
						<a href="#signupAcc" style="padding-left:350px;font-size:15px;color:white;">Đăng ký</a>
						</form>
EOP;
				}
			?>
      
  </header>
   
  <hr size="5px" noshade color="#CCCCCC" />
   
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
    <br /><br />
    <p style="width:150px;"><a href="#yourSpace" name="yourSpace" style="text-decoration:none;outline:none;color:#007CB9;"><h1 style="color:#FFF">Góc của bạn</h1></a>
    <br />
    </p>
    <div id="giadinh"><a href="giadinh.html"><img src="images/chuyenmuc.jpg" /></a></div>
    <div id="tinhyeu"><a href="tinhyeu.html"><img src="images/chuyenmuc.jpg" /></a></div>
    <div id="tinhban"><a href="tinhban.html"><img src="images/chuyenmuc.jpg" /></a></div>
    <div id="hoctap"><a href="hoctap.html"><img src="images/chuyenmuc.jpg" /></a></div>
    <div id="xahoi"><a href="xahoi.html"><img src="images/chuyenmuc.jpg" /></a></div>
    <div id="thamkin"><a href="thamkin.html"><img src="images/chuyenmuc.jpg" /></a></div>
  </div>
  
	<?php
    if(!isset($_SESSION['user_curr']))
    {
      print<<<EOP
    <div align="center" style="padding-bottom:400px;">
      <a name="signupAcc"></a>
      <form method="post" action="registerPage.php" id="msform">
        <ul id="progressbar">
          <li class="active" style="font-size:17px;font-weight:700">THÔNG TIN</li>
            <li style="font-size:17px;font-weight:700">LIÊN HỆ</li>
            <li style="font-size:17px;font-weight:700">TÀI KHOẢN</li>
        </ul>
        
        <fieldset>
        <h2 class="fs-title">Thông tin cá nhân</h2>
        <input type="text" name="name" placeholder="Họ tên"/>
        <input type="date" name="birthday" placeholder="Ngày sinh"/>
        <input type="text" name="phone" placeholder="Số điện thoại"  />
        <input type="button" name="next" class="next action-button" value="Tiếp theo" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Địa chỉ liên hệ</h2>
        <input type="email" name="email" placeholder="Email" />
        <input type="text" name="facebook" placeholder="Facebook"  />
        <input type="text" name="gplus" placeholder="Google Plus"  />
        <input type="button" name="previous" class="previous action-button" value="Quay lại" />
        <input type="button" name="next" class="next action-button" value="Tiếp theo" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Thiết lập tài khoản</h2>
        <input type="text" name="username" placeholder="Tài khoản" required />
        <input type="password" name="password" placeholder="Mật khẩu" required />
        <input type="password" name="rePassword" placeholder="Nhập lại mật khẩu" required />
        <input type="button" name="previous" class="previous action-button" value="Quay lại" />
        <input type="submit" name="next" class="submit action-button" value="Hoàn tất" />
        </fieldset>
      </form>
    </div>
EOP;
    }
  ?>
    <!-- jQuery -->
    
    <!-- jQuery easing plugin -->
    <script src="jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="javascripts/multiSignupScript.js"></script>
</body>
</html>