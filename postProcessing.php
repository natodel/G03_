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
            $subject = $_POST['subject'];
            $topic_body = $_POST['topic_body'];
            require('config.php');
            $currentUser = $_POST['currentUser'];
            $category = $_POST['category'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $now = date('Y-m-d H:i:s');

            echo $now;
            $query = "INSERT INTO topics(date,username,cat_name,subject,body) VALUES ('".$now."','".$currentUser."','".$category."','".$subject."','".$topic_body."');";
            $result = mysql_query($query);
            if($result){
                echo "Đăng bài thành công!";
                echo "<a href='javascript:history.go(-2)'>Quay lại</a>";
            }
            else{
                echo mysql_error($result);
            }
            ?>
        </div>
        
        
        
    </body>
</html>
