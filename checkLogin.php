<?php
	if(!empty($_POST['userLogin']) && !empty($_POST['passLogin']))
	{
		require_once('config.php');
		$u = $_POST['userLogin'];
		$p = md5($_POST['passLogin']);
		$refe = "SELECT * FROM members WHERE taikhoan='".$u."' and matkhau='".$p."'";
		$query = mysql_query($refe);
		if(mysql_num_rows($query) == 0)
		{
			print <<<EOP
				Không tồn tại tài khoản <br>
				<a href="index.php">Nhấn vào đây để đăng nhập lại</a>
EOP;
		}
		else
		{
			$row_curr = mysql_fetch_array($query);
			session_start();
			$_SESSION['user_curr'] = $_POST['userLogin'];
			header('Location: index.php');
			print<<<EOP
				Đăng nhập thành công!
				<a href="index.php">Nhấn vào đây để vào trang chủ</a>
EOP;
		}
	}
	else
	{
		echo 'Nhập đủ tên đăng nhập và tài khoản :-p';
		echo '<a href="homepage.php">Nhấn vào đây để đăng nhập lại</a>';
	}
?>