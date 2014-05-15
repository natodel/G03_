<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diễn đàn | Góc tâm sự - Lắng nghe những sẻ chia</title>
        <link rel="stylesheet" type="text/css" href="css/imgCapsFor4rum.css" />
        <link rel="stylesheet" media="all" href="css/homeStyle.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/signupStyle.css" /> 
        <link rel="shortcut icon" href="images/logo.png" />	
        <link href="css/forumStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" />    
        <script language="javascript" src="javascript/slide.js"></script>
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <div align="center">
            <br/>
            <?php
            $comment_body = $_POST['comment_body'];
            require('config.php');
            $currentUser = $_SESSION['current_user'];
            $topic = $_POST['topic'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $now = date('Y-m-d H:i:s');

            $query = "INSERT INTO comments(topic,body,date,username) VALUES ('".$topic."','".$comment_body."','".$now."','".$currentUser."');";
            $result = mysql_query($query);
            if($result){
                echo "Đăng bài thành công!";
               header("location:javascript://history.go(-1)");
            }
            else{
                echo mysql_error($result);
            }
            ?>
        </div>
    </body>
</html>
