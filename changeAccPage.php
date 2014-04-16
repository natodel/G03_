<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thay đổi thông tin | Góc tâm sự</title>
        <link rel="stylesheet" type="text/css" href="css/changeAccPageStyle.css" />
        <link href="css/sampleStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="images/logo.png" />	
    </head>

    <body>
        <!--===========START HEADER============-->
        <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" /></a>	
            <hr id="middleLine" noshade />
        </header>
        <!--===========END HEADER=============-->
        <div id="main">
            <h1>Thông tin hiện tại của bạn</h1>
            <?php
            @mysql_connect("localhost", "root", "") or die('Can not connect to host');
            @mysql_select_db("data_userweb");
            $user_curr = $_SESSION['user_curr'];
            $refer = "select * from users where account='" . $user_curr . "'";
            $query = mysql_query($refer);
            $row_curr = mysql_fetch_array($query);

            echo "Tài khoản: " . $row_curr['account'] . "<br/>";
            echo "Họ và tên: " . $row_curr['name'] . "<br/>";
            echo "Địa chỉ email: " . $row_curr['email'] . "<br/>";
            echo "Số điện thoại: " . $row_curr['phone'] . "<br/>";
            ?>

            <h1>Điền vào thông tin bạn muốn thay đổi</h1>

            <form action="changeAccChecking.php" method="post">
                <input type="text" class="styleBox" name="name" placeholder="Họ và tên" /> <br/>
                <input type="text" class="styleBox" name="email" placeholder="Email" /><br/>
                <input type="text" class="styleBox" name="phone" placeholder="Điện thoại" /><br/>
                <input type="password" class="styleBox" name="password" placeholder="Mật khẩu mới" /> <br/>
                <input type="password" class="styleBox"  name="repassword" placeholder="Nhập lại mật khẩu mới" /><br/>
                <input type="password" class="styleBox" name="pass_curr" placeholder="Mật khẩu hiện tại"><br/><br/>
                <input type="submit" class="submitButton" name="edited" value="Hoàn Thành">
            </form>
        </div>
    </body>
</html>