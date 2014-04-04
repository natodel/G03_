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
				Sai thông tin <br>
				<a href="index.php">Nhấn vào đây để đăng nhập lại</a>
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
		echo 'Nhập đủ tên đăng nhập và tài khoản :-p';
		echo '<a href="homepage.php">Nhấn vào đây để đăng nhập lại</a>';
	}
?>