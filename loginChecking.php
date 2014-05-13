<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng nhập | Góc tâm sự</title>
        <link rel="stylesheet" type="text/css" href="css/changeAccPageStyle.css" />
        <link href="css/loginCheckingStyle.css" rel="stylesheet" type="text/css"/>
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

        <!--===========START MAIN DIV============-->
        <div id="main">
            <br/>
            <br/>

            <?php
            if (!empty($_POST['userLogin']) && !empty($_POST['passLogin'])) {
                require_once('config.php');
                $u = $_POST['userLogin'];
                $p = md5($_POST['passLogin']);
                $refe = "SELECT * FROM users WHERE account='" . $u . "' and password='" . $p . "'";
                $query = mysql_query($refe);
                if (mysql_num_rows($query) == 0) {
                    print <<<EOP
				Sai thông tin <br>
				<a href="index.php">Nhấn vào đây để đăng nhập lại</a>
EOP;
                } else {
                    $row_curr = mysql_fetch_array($query);
                    session_start();
                    $_SESSION['current_user'] = $row_curr['account'];
                    $_SESSION['name'] = $row_curr['name'];
                    $_SESSION['level'] = $row_curr['level'];
                    header('Location: index.php');
                }
            } else {
                echo 'Nhập đủ tên đăng nhập và tài khoản :-p';
                echo '<a href="homepage.php">Nhấn vào đây để đăng nhập lại</a>';
            }
            ?>
        </div>
        <!--===========END MAIN DIV============-->
    </body>
</html>