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
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <div align="center">
            <br/>
            <table id="displayTopics">
                <?php
                    if (!isset($_GET['page'])){
                        $page = 0 ;
                    }
                    else $page = $_GET['page'];
                    $itemsPerPage = 2;
                    if(!isset($_GET['category'])){
                        header('Location: index.php');
                    }
                    $category = $_GET['category'];
                    require_once('config.php');
                    $query = "SELECT * from topics where cat_name='".$category."';";
                    $resultAll = mysql_query($query);
                    $numbersOfTopic = mysql_num_rows($resultAll);
                    $numsOfPage = $numbersOfTopic/$itemsPerPage;
                    $selectiveResult = mysql_query("SELECT * from topics where cat_name='".$category."' ORDER BY date DESC LIMIT ".$page*$itemsPerPage.",".$itemsPerPage." ;");
                    $numsOfResult = mysql_num_rows($selectiveResult);
                ?>
                <tr>
                    <th colspan="3" >Tổng số bài viết <?php echo $numbersOfTopic ?>
                        <a href="createNewTopic.php?category=<?php echo $category; ?>"><img src="images/new_topic.png" alt="Viết bài"/></a>
                    </th>
                </tr>
                <tr>
                    <th>Chủ đề</th>
                    <th>Ngày đăng</th>
                    <th>Người gửi</th>
                </tr>
                <?php
                if($numsOfResult>0){
                    while($topic = mysql_fetch_array($selectiveResult)){
                        echo "<tr><td><a href='discussion.php?topic=".$topic['id']."'>".$topic['subject']."</a></td>";
                        echo "<td>".$topic['date']."</td>";
                        echo "<td>".$topic['username']."</td></tr>";
                    }
                }
               
                ?>
                <tr style="text-align:center">
                    <td colspan="3">
                    <?php
                        for ( $page = 0; $page <= $numsOfPage; $page ++ ){
                            echo "<a href='forum.php?category={$category}&page={$page}'>{$page} - </a>";
                        }
                    ?>
                    </td>
                </tr>
            </table>
        </div>
        
        
        
    </body>
</html>