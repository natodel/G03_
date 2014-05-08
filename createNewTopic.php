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
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="kindeditor/kindeditor-min.js" type="text/javascript"></script>
        <script src="kindeditor/lang/en.js" type="text/javascript"></script>
        <script>
            KindEditor.ready(function(K) {
                window.editor = K.create('#topic_body', {
                    langType : 'en'
                });
            });
        </script>
    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <?php  
            $currentUser = $_SESSION['current_user'];
            $category = $_GET['category'];
        ?>
        <br/>
        <div id="mainWrapper">
            <form action="postProcessing.php"  method="post">
                <input placeholder="Tiêu đề" name="subject" />
                <textarea placeholder="Viết lên những tâm sự để được sẻ chia....." id="topic_body" name="topic_body" cols="100" rows="20"></textarea>
                <input type="hidden" name="category" value='<?php echo $category; ?>' />
                <input type="hidden" name="currentUser" value='<?php echo $currentUser; ?>' />
                <input type="submit" name="submit" value="Đăng bài" />
            </form>
        </div>
    </body>
</html>