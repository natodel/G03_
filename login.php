<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    require_once('config.php');
    if(isset($_POST['login_button']))
    {
        $username = addslashes($_POST['username']);
        $password = md5(addslashes($_POST['password']));
        //check exist account in database
        
        $sql_query= @mysql_query("SELECT id,taikhoan,matkhau FROM members WHERE taikhoan='{$username}'");
        $member = @mysql_fetch_array($sql_query);
        if(@mysql_num_rows($sql_query) <= 0)
        {
            print "Không tồn tại tài khoản.<a href='javascript:history.go(-1)'>Nhấp vào đây để đăng nhập lại</a>";
            exit; 
        }
        if($password != $member['matkhau'])
        {
            print "Mật khẩu không đúng.<a href='javascript:history.go(-1)'>Nhấp vào đây để đăng nhập lại</a>";
            exit;
        }
        //Start 
        $_SESSION['user_id'] = $member['id'];
        //Status login successful
        print "Bạn đã đăng nhập thành công dưới tên: {$member['taikhoan']}.<a href='javascript:history.go(-1)'>Nhấp vào đây để trở về trang chủ</a>";
        exit;   
    }
	else
	{
		print <<<EOP
		<form id="signin" method="post" action="#">
			<input type="text" id="username" name="username" placeholder="Tài khoản" size="20"/>
			<input type="password" id="password" name="password" placeholder="Mật khẩu" size="20"/>
			<input type="submit" id="login_button" name="login_button" value="Đăng nhập" />
		</form>
EOP;
	}
?>