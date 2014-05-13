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
        <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" />    
        <link href="css/discussionStyle.css" rel="stylesheet" type="text/css"/>
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    </head>
<body>
    <?php
    include('header.php');
    ?>
    <div id="mainWrapper" >
        <br/>
        <div class= "index"  align="center">
            <div class="text">

                <?php
                $topic = $_GET['topic'];
                require_once('config.php');
                $query = "SELECT * from topics where id='" . $topic . "';";
                $result = mysql_query($query);
                while ($topic = mysql_fetch_array($result)) {
                    $_bodyDisplay = $topic['body'];
                    $_username = $topic['username'];
                }
                ?>
                <?php
                $userQuery = "SELECT name from users where account='" . $_username . "';";
                $userResult = mysql_query($userQuery);
                while ($users = mysql_fetch_array($userResult)) {
                    $_postUser = $users['name'];
                }
                ?>
                <h2><?php echo $_postUser; ?></h2>
                
                <p>
                    <?php echo $_bodyDisplay; ?>
                </p>
                
            </div>

        </div>
        <br/>

        <div>
        </div>


    </div>
</body>
</html>