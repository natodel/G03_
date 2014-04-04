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
  <div align="center" style="color:#FF0">
  <br />
	<?php
	if(!empty($_POST['userLogin']) && !empty($_POST['passLogin']))
	{
		require_once('config.php');
		$u = $_POST['userLogin'];
		$p = md5($_POST['passLogin']);
		$refe = "SELECT * FROM members WHERE account='".$u."' and password='".$p."'";
		$query = mysql_query($refe);
		if(mysql_num_rows($query) == 0)
		{
			print <<<EOP
				<h2>Sai thông tin</h2> <br>
				<a href="index.php" style="font-size:19px;color:green;">Nhấn vào đây để đăng nhập lại</a>
EOP;
		}
		else
		{
			$row_curr = mysql_fetch_array($query);
			session_start();
			$_SESSION['user_curr'] = $row_curr['account'];
			$_SESSION['name'] = $row_curr['name'];
			$_SESSION['level'] = $row_curr['level'];
			if($_SESSION['level'] == 2)
			{
				header('Location: index.php');
				exit();
			}
			else
			{
				//page admin
			}
		}
	}
	else
	{
		echo '<h2>Nhập đủ tên đăng nhập và tài khoản :-p</h2>';
		echo '<h2><a href="homepage.php">Nhấn vào đây để đăng nhập lại</a></h2>';
	}
?>
	</div>
</body>
</html>