<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Góc tâm sự - Lắng nghe những sẻ chia | Trang chủ</title>
        <title>Trang chủ Góc tâm sự - Lắng nghe những sẻ chia</title>
        <link href="css/changeAccCheckingStyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/sampleStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="images/logo.png" />	
    </head>

    <body>
        <!--===========START HEADER============-->
        <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" /></a>	
            <hr id="middleLine" noshade />
        </header>
        <div id="main">
            <br/>
            <br/>
            <?php
            session_start();
            @mysql_connect("localhost", "root", "") or die('Can not connect to host');
            @mysql_select_db("data_userweb");
            $current_user = $_SESSION['current_user'];
            $refer = "select * from users where account='" . $current_user . "'";
            $query = mysql_query($refer);
            $row_curr = mysql_fetch_array($query);

            $pass_curr = md5(addslashes($_POST['pass_curr']));
            $name = addslashes($_POST['name']);
            $pass = md5(addslashes($_POST['password']));
            $repass = md5(addslashes($_POST['repassword']));
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);

            if ($row_curr['password'] == $pass_curr) {
                //don't change name
                if (!$name) {
                    $name = $row_curr['name'];
                }
                //don't change password
                if (!$_POST['password'] && !$_POST['repassword']) {
                    $pass = $row_curr['password'];
                } else if ($pass != $repass) {
                    $pass = $row_curr['password'];
                    echo "Mật khẩu mới không khớp <br/>";
                    echo "<a href='javascript:history.go(-1)'>Quay về</a>";
                    exit();
                }
                //don't change email
                if (!$email) {
                    $email = $row_curr['email'];
                }
                //don't change phone
                if (!$phone) {
                    $phone = $row_curr['phone'];
                }
                //Update
                $update = mysql_query("update users set password='" . $pass . "', name='" . $name . "', email='" . $email . "', phone='" . $phone . "' where account='" . $current_user . "'");
                if ($update) {
                    $_SESSION['name'] = $name;
                    header('Location: index.php');
                } else
                    echo "Xảy ra lỗi";
            }
            else {
                echo "Mật khẩu hiện thời của bạn không chính xác!<br/>";
                echo "<a href='javascript:history.go(-1)'>Quay về</a>";
            }
            ?>
        </div>
    </body>
</html>