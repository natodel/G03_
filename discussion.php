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
                <?php
                $topicID = $_GET['topic'];
                require_once('config.php');
                $query = "SELECT * from topics where id='" . $topicID . "';";
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
                <div class="userInformation"><?php echo $_postUser; ?></div>
                <div class="story"><?php echo $_bodyDisplay; ?> </div>
         </div>
         
         <div class="comment">
         	<div class="createAComment" >
         	<form action="postComment.php" method="post">
            	<textarea class="createACommentBody" name="comment_body" placeholder="Bình luân nghiêm túc, cấm spam, cấm chửi tục.v.v." ></textarea>				<br />
                <input type="hidden" name="topic" value="<?php echo $topicID ?>"/>	
                <input class="commentButton" type="submit" value="Gửi bình luận" />
            </form>
            </div>
            <?php 
				require_once('config.php');
				$query = "SELECT * from comments where topic='".$topicID."'";
				$resultAll = mysql_query($query);
				$numbersOfComment = mysql_num_rows($resultAll);
				if($numbersOfComment!=0){
					while($comment = mysql_fetch_array($resultAll)){
					echo "<div class='UserComment'>";
					echo "<span class='commentUser'>";
					echo  $comment['username']."</br>";
					echo "</span><span class='commentBody'>";
					echo $comment['body'];
					echo "</span></br><span class='commentDate'>Bình luận lúc: ".$comment['date']."</span></div>";
					}
				}
			?>
         </div>
    </div>
</body>
</html>