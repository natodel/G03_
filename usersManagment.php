

<?php
session_start();
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
            $query = "SELECT * from users;";
            $result = mysql_query($query);
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            else{
                $id="";
            }
            ?>
            <table class="table table-striped table-bordered table-hover table-condensed table-responsive">
                <caption><h2>Quản lý thành viên</h2></caption>
                <tr>
                    <th>Họ tên</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Cấp</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Công cụ<th>
                </tr>
                <?php
                while ($user = mysql_fetch_array($result)) {
                    if($user['id']===$id){
                        echo "<form action='updateUser.php' method='POST'><tr><td>" . $user['name'] . "</td>";
                        echo "<td>" . $user['account'] . "</td>";
                        echo "<td>" . $user['password'] . "</td>";
                        echo "<td><select class='form-control'><option value='1'>Admin</option><option value='2'>Member</option></select><input type='hidden' name='userID' value='{$user['id']}' /></td>";
                        
                        echo "<td><address><a href='mailto:".$user['email']."'>".$user['email']."</a></address></td>";
                        echo "<td>" . $user['phone'] . "</td>";
                        echo "<td><a href='usersManagment.php'>Hủy</a> || <button class='btn-link type='submit'>Hoàn thành</button></td></tr></form>";
                    }
                    else{
                        echo "<tr><td>" . $user['name'] . "</td>";
                        echo "<td>" . $user['account'] . "</td>";
                        echo "<td>" . $user['password'] . "</td>";
                        echo "<td>" . $user['level'] . "</td>";
                        echo "<td><address><a href='mailto:".$user['email']."'>".$user['email']."</a></address></td>";
                        echo "<td>" . $user['phone'] . "</td>";
                        echo "<td><a href='?id={$user['id']}'>Sửa</a> || <a href='deleteUser.php?id={$user['id']}'>Xóa</a></td></tr>";
                    }
                    
                }
                ?>
            </table>
           
        </div>
    </body>
</html>
