<?php
session_start();
if ((!isset($_SESSION['current_user'])) || ($_SESSION['level'] == 2)) exit();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page  
        via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
        html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
        respond.min.js"></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files 
        as needed -->
        <script src="javascripts/s/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <?php
            require_once('config.php');
            $query = "SELECT * from topics;";
            $result = mysql_query($query);
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            else{
                $id="";
            }
            ?>
            <table class="table table-striped table-bordered table-hover table-condensed table-responsive">
                <caption><h2>Quản lý bài viết</h2></caption>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Người đăng</th>
                    <th>Ngày đăng</th>
                    <th>Chuyên mục</th>
                    <th>Công cụ</th>
                </tr>
                <?php
                while ($topic = mysql_fetch_array($result)) {
                    if($topic['id']===$id){
                        echo "<form action='updateTopic.php' method='POST'><tr><td>" . $topic['subject'] . "</td>";
                        echo "<td>" . $topic['username'] . "</td>";
                        echo "<td><select class='form-control'><option value='giadinh'>Gia đình</option><option value='tinhyeu'>Tình yêu</option><option value='tinhban'>Tình bạn</option><option value='hoctapcongviec'>Học tập - Công việc</option><option value='thamkin'>Thầm kin</option></select><input type='hidden' name='userID' value='{$topic['id']}' /></td>";
                        echo "<td>" . $topic['date'] . "</td>";
                        echo "<td><a href='topicsManagment.php'>Hủy</a> || <button class='btn-link type='submit'>Hoàn thành</button></td></tr></form>";
                    }
                    else{
                        echo "<tr><td><address><a href='discussion.php?topic='{$topic['id']}'>" . $topic['subject'] . "</a></address></td>";
                        echo "<td>" . $topic['username'] . "</td>";
                        echo "<td>" . $topic['date'] . "</td>";
                        echo "<td>" . $topic['subject'] . "</td>";
                        echo "<td><a href='?id={$topic['id']}'>Sửa</a> || <a href='deleteTopic.php?id={$topic['id']}'>Xóa</a></td></tr>";
                    }
                    
                }
                ?>
            </table>
           <a href='javascript:history.go(-1)'> Quay lại </a>
        </div>
    </body>
</html>
