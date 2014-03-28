<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	session_start();
	require_once("config.php");
	$user_curr = $_SESSION['user_curr'];
	$refer = "select * from members where account='".$user_curr."'";
	$query = mysql_query($refer);
	$row_curr = mysql_fetch_array($query);
	
	$pass_curr = md5(addslashes($_POST['pass_curr']));
	$name = addslashes($_POST['name']);
	$pass = md5(addslashes($_POST['password']));
	$repass = md5(addslashes($_POST['repassword']));
	$email = addslashes($_POST['email']);
	$phone = addslashes($_POST['phone']);

	if($row_curr['password'] == $pass_curr)
	{
		//don't change name
		if(!$name)
		{
			$name = $row_curr['name'];
		}
		//don't change password
		if(!$_POST['password'] && !$_POST['repassword'])
		{
			$pass = $row_curr['password'];
		}
		else if($pass != $repass)
			{
				$pass = $row_curr['password'];
				echo "Mật khẩu mới không khớp <br/>";
				echo "<a href='javascript:history.go(-1)'>Quay về</a>";
				exit();
			}
		//don't change email
		if(!$email)
		{
			$email = $row_curr['email'];
		}
		//don't change phone
		if(!$phone)
		{
			$phone = $row_curr['phone'];
		}
		//Update
		$update = mysql_query("update members set password='".$pass."', name='".$name."', email='".$email."', phone='".$phone."' where account='".$user_curr."'");
		if($update)
		{
			$_SESSION['name'] = $name;
			header('Location: changeAccSuccess.php');
		}
		else echo "Xảy ra lỗi";
	}
	else
	{
		echo "Mật khậu hiện thời của bạn không chính xác";
		echo "<a href='javascript:history.go(-1)'>Quay về</a>";
	}
	
?>