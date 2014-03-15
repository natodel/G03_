<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//create file 
	require_once('config.php');
	//check email
	function check_email($email){
		if(strlen($email)== 0) return false;
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
		return false;
	}
	
	if(isset($_POST['button_register']))
	{
		$username = addslashes($_POST['username']);
		$password = md5(addslashes($_POST['password']));
		$name = addslashes($_POST['name']);
		$email = addslashes($_POST['email']);
		//check 6 information
		if( !$username || !$_POST['password'] || !$name || !$email)
		{
			print "Thông tin sai! <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
			exit;
		}
		
		if(mysql_num_rows(mysql_query("SELECT taikhoan FROM members WHERE taikhoan='$username'")) > 0)
		{
			print "Tài khoản đã có người dùng <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
			exit;
		}
		
		//Kiểm tra email có hợp lệ không
		if(!check_email($email))
		{
			print "Email không hợp lệ <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
			exit;
		}
		//Tạo tài khoản
		$new_acc = mysql_query("INSERT INTO members(taikhoan, matkhau, ten, email) VALUES ('$username', '$password', '$name', '$email')");
		//Thông báo tại tài khoản thành công
		if($new_acc) 
		{
			print "Tài khoản {$username} đã được tạo <a href=''> Đăng nhập</a>";
		}
		else{
			 print "Xảy ra lỗi";
		}
	}
	else
	{
	   
		print <<<EOP
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/header.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<title>Untitled Document</title>
</head>

<body>

	<header>	<!-- Phần đầu trang -->
    	<a href="#"><img class= "logo" src="image/logo.jpg"  alt="logo" /></a>
        <div class="top">
        	<div class="signin">
            	<a href="login.php"><img src="image/Signin_button.png" alt="login" /></a>
            </div>
        </div> 
        <div class="form_reigister">
			<form id="form_Register" name="form_Register" method="post" action="">
				<table class="body" border="1" width = "300px">
					<tr>
						<td>Tài Khoản</td>
						<td> <input type="text" name="username" placeholder="User"/></td>
					</tr>
					<tr>
						<td>Mật Khẩu</td>
						<td> <input type="password" name="password" placeholder="Password"/></td>
					</tr>
					<tr>
						<td>Tên</td>
						<td> <input type="text" name="name" placeholder="Your Name"/></td>
					</tr>
					<tr>
						<td>Email</td>
						<td> <input type="text" name="email" placeholder="Your Email" /></td>
					</tr>
					<tr>
					<td align="center"> <input name="button_register" class="button_register" type="submit" value="Đăng Ký"/> </td>
					</tr>
				</table>
			</form>
		</div>  	
	</header>

    <div class="main">
	
    	<div class="topic">
        	<div class="line1">
                <div id="giadinh"><a href="#"><img src="image/chuyenmuc.jpg" /></a></div>
                <div id="tinhyeu"><a href="#"><img src="image/chuyenmuc.jpg" /></a></div>
                <div id="tinhban"><a href="#"><img src="image/chuyenmuc.jpg" /></a></div>
            </div>
        </div>	
  	</div>
    
<footer>
       	<div id="lienhe">
           	<address>
              	<ol>Group 10 - SE2014 - K57CA - UET - VNU<br />
                   	<li>Nguyễn Hồng Sơn</li>
                    <li>Lê Đỗ Tân</li>
                    <li>Chu Tâm Anh</li>
                    <li>Leo Tuấn Anh</li>
                    <li> And some others....</li>
                </ol>
            </address>
        </div>	
    </footer>
</body>
</html>
EOP;
	}
?>