<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h1>Thông tin hiện tại của bạn</h1>
<?php
	session_start();
	require_once('config.php');
	$user_curr = $_SESSION['user_curr'];
	$refer = "select * from members where account='".$user_curr."'";
	$query = mysql_query($refer);
	$row_curr = mysql_fetch_array($query);
	
	echo "Tài khoản: ".$row_curr['account']."<br/>";
	echo "Họ và tên: ".$row_curr['name']."<br/>";
	echo "Địa chỉ email: ".$row_curr['email']."<br/>";
	echo "Số điện thoại: ".$row_curr['phone']."<br/>";
?>

<h1>Điền vào thông tin bạn muốn thay đổi</h1>

<form action="changeaccount2.php" method="post">
	<input type="text" name="name" placeholder="Họ và tên"> <br/>
  <input type="password" name="password" placeholder="Mật khẩu"> <br/>
  <input type="password"  name="repassword" placeholder="Nhập lại mật khẩu"><br/>
  <input type="text" name="email" placeholder="Email"><br/>
  <input type="text" name="phone" placeholder="Điện thoại"><br/>
  <p style="font-size:18px;color:red;">Nhập mật khẩu hiện tại của bạn: </p> *<input type="password" name="pass_curr" placeholder="Mật khẩu hiện tại"><br/><br/>
  <input type="submit" name="edited" value="Hoàn Thành">
</form>