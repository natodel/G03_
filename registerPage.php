<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng kí | Góc tâm sự</title>
        <link rel="stylesheet" type="text/css" href="css/registerPageStyle.css" />
        <link href="css/sampleStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="images/logo.png" />	
    </head>

    <body>
        <!--===========START HEADER============-->
        <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" /></a>	
            <hr id="middleLine" noshade />
        </header>
        <!--===========END HEADER============-->
        <div id="main">
            <br/>
            <br/>

            <?php
            require_once('config.php');

            //check email
            function check_email($email) {
                if (strlen($email) == 0)
                    return false;
                if (filter_var($email, FILTER_VALIDATE_EMAIL))
                    return true;
                return false;
            }

            $username = addslashes($_POST['username']);
            $password = md5(addslashes($_POST['password']));
            $repassword = md5(addslashes($_POST['rePassword']));
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            //check information
            if (!$username || !$_POST['password'] || !$name || !$email) {
                print "Thông tin thiếu! <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
                exit;
            }

            if ($password != $repassword) {
                print "Mật khẩu không khớp <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
                exit;
            }

            if (mysql_num_rows(mysql_query("SELECT account FROM users WHERE account='$username'")) > 0) {
                print "Tài khoản đã có người dùng <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
                exit;
            }

            //Check email
            if (!check_email($email)) {
                print "Email không hợp lệ <a href='javascript:history.go(-1)'> Nhấn vào đây để nhập lại </a>";
                exit;
            }
            //Creat new account
            $new_acc = mysql_query("INSERT INTO users(level, account, password, name, email, phone) VALUES (2, '$username', '$password', '$name', '$email', '$phone')");

            if ($new_acc) {
                print <<<EOP
                            Chào mừng thành viên mới: {$username} ! <br/>
                            <a href='index.php'> Đăng nhập</a>
EOP;
            } else {
                print "Xảy ra lỗi";
                print "<a href='javascript:history.go(-1)'> Quay về trang chủ</a>";
            }
            ?>
        </div>
    </body>
</html>