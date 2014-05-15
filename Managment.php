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
            <h1 class="text-info text-center">Xin chào Administrator!</h1>
            <h2 class="text-danger">Quản lý diễn đàn</h2>
            <ol>
                <li><address><a href="index.php">Trang chủ</a></address></li>
                <li><address><a href="usersManagment.php">Quản lý thành viên</a></address></li>
                <li><address><a href="topicsManagment.php">Quản lý bài viết</a></address></li>
                </li> 
            </ol>
            
        </div>
    </body>
</html>
