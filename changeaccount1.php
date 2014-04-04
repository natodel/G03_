<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="css/changeAccStyle.css" />
  <link rel="shortcut icon" href="images/logo.png"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thay đổi thông tin cá nhân</title>	
</head>

<body>
	<header>
  	<a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" width="82px" height="82px" /></a>
   <hr size="5px" noshade color="#CCCCCC" />
 	</header>
   
  <div align="center">	
    <h1>Thông tin hiện tại của bạn</h1>
    <font color="white">
    <?php
      session_start();
      require_once('config.php');
      $user_curr = $_SESSION['user_curr'];
      $refer = "select * from members where account='".$user_curr."'";
      $query = mysql_query($refer);
      $row_curr = mysql_fetch_array($query);
      
      echo "<b>Tài khoản:</b> ".$row_curr['account']."<br/>";
      echo "<b>Họ và tên:</b>	 ".$row_curr['name']."<br/>";
      echo "<b>Địa chỉ email:</b> ".$row_curr['email']."<br/>";
      echo "<b>Số điện thoại:</b> ".$row_curr['phone']."<br/>";
    ?>
  	</font>
    <h1>Điền vào thông tin bạn muốn thay đổi</h1>
  
    <form action="changeaccount2.php" method="post">
      <input type="text" name="name" class="styleBox" size="26" placeholder="Họ và tên" /><br />
      <input type="text" name="email" class="styleBox" size="26" placeholder="Email"><br />
      <input type="text" name="phone" class="styleBox" size="26" placeholder="Điện thoại"><br/>
      <input type="password" name="password" class="styleBox" size="26" placeholder="Mật khẩu"><br />
      <input type="password"  name="repassword" class="styleBox" size="26" placeholder="Nhập lại mật khẩu"><br/>
     	&nbsp;<input type="password" name="pass_curr" class="styleBox" size="26" placeholder="Mật khẩu hiện tại"><b style="color:#F90">*</b><br />
     	<input type="submit" name="edited" class="submitButton" style="border-radius:5px 5px 5px 5px;width:100px;height:30px;" value="Hoàn Thành">
   	</form>
  </div>
</body>
</html>
