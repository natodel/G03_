<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diễn đàn | Góc tâm sự - Lắng nghe những sẻ chia</title>
        <link rel="stylesheet" type="text/css" href="css/imgCapsFor4rum.css" />
        <link href="css/SearchStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/signupStyle.css" /> 
        <link rel="shortcut icon" href="images/logo.png" />	
        <link href="css/forumStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" />    
        <script src="javascripts/smoothMenu.js" type="text/javascript"></script>
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        
        
            <?php
            $cateArray = array('giadinh'=>'Gia đình','tinhyeu'=>'Tình yêu','tinhban'=>'Tình bạn','hoctapcongviec'=>'Học tập - Công Việc','thamkin'=>'Thầm kín');
        include('header.php');
        ?>
        <div class="container">
        <?php
        if(isset($_POST['title'])){
            $title = $_POST['title'];
        }
        else $title = "";
        if (isset($_POST['category'])) {
            $category = $_POST['category'];
            require_once('config.php');
            if ($_POST['category'] != "#") {
                $query = "SELECT * from topics where cat_name ='" . $category . "' and subject LIKE '%{$title}%';";
            } else if ($category == "#") {
                $query = "SELECT * from topics where subject LIKE '%{$title}%';";
            }
            $result = mysql_query($query);
            $numbersOfResult = mysql_num_rows($result);
            if ($numbersOfResult == 0) {
                echo "Không tồn tại!";
            } else {
             ?>
            <table class="table table-striped table-bordered table-hover table-condensed table-responsive">
                <caption><h2>Kết quả tìm kiếm</h2></caption>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Người đăng</th>
                    <th>Ngày đăng</th>
                    <th>Chuyên mục</th>
                </tr>
                <?php
                while ($topic = mysql_fetch_array($result)) {
                    
                        echo "<tr><td><address><a href='discussion.php?topic='{$topic['id']}'>" . $topic['subject'] . "</a></address></td>";
                        echo "<td>" . $topic['username'] . "</td>";
                        echo "<td>" . $topic['date'] . "</td>";
                        echo "<td>" . $cateArray[$topic['cat_name']] . "</td>";
                }
                ?>
            </table>
            <?php
          
            }
        }
        ?>
            
           <a href='javascript:history.go(-1)'> Quay lại </a>
        </div>
    </body>
</html>