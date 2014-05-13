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

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
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