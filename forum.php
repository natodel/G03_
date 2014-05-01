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
        <script src="javascripts/smoothMenu.js" type="text/javascript"></script>
        <script src="javascripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    </head>
<body>
    <?php
                    if(isset($_SESSION['current_user'])) $currentUser = $_SESSION['current_user'];
                    else $currentUser=null;
                    if(!isset($_GET['page'])){
                        $page = 0 ;
                    }
                    else {
						$page = $_GET['page'];
						
						}
					$currentPage= $page;
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
        <?php
        include('header.php');
        ?>
    <div class= "linksTaskbar">
        <ul>
            <li><a href="#">Trang chủ<span>></span></a></li>
            <li><a href="#">Diễn đàn<span></span></a></li>
        </ul>
     </div>
     <br/>
    <div align="center" id="bodyWrapper">
      	 <div id= "container">
                <ul id="navmenu">
                    <li id="nameOfCategory">
						<?php
								if($category=='giadinh') echo"<a href= 'forum.php?category=giadinh'>Gia đình</a>";
								if($category=='tinhban')echo"<a href= 'forum.php?category=tinhban'>Tinh ban</a>";
								if($category=='tinhyeu') echo"<a href='forum.php?catregory=tinhyeu'>Tinh yeu</a>";
								
                    	?>
                    </li>
                    <li id="listOfCategories" ><a href="#" id = "submenu">Chuyên mục</a>
                        <ul id = "drop" >
                            <li><a href="forum.php?category=tinhban">Tình bạn</a></li>
                            <li><a href="forum.php?category=tinhyeu">Tình yêu</a></li>
                            <li><a href="forum.php?category=giadinh">Gia đình</a></li>
                        </ul>
                    </li>
                </ul>
   
          <div id = "createATopic" >
            Tổng số bài viết: <?php echo $numbersOfTopic ?>
                <?php 
                    if($currentUser){
                        echo "<a href='createNewTopic.php?category={$category}'><img src='images/new_topic.png' alt='Viết bài'/></a>";
                    }
                    else{
                        echo "<br/><i>Chỉ có thành viên mới có thể đăng bài mới.</i><br/>";
                        echo "<a href='index.php#signupAcc'>Đăng kí</a>";
                    }
                ?>
               
         </div>
        </div>
         
        <table class="display">
        	<tr>
          	<th id="currentTopics"> 
                <ul class="displayTopics">
                  	<li>      
                            <?php
                            if($numsOfResult>0){
                                while($topic = mysql_fetch_array($selectiveResult)){
                                    echo "<ul class='story'>";
                                    echo "<div id= 'profilePicture'><img src= 'images/logo.png' width= 160px height=160px /></div>";
                                    echo "<div id='index'><ul id='text'><li><a href='discussion.php?topic=".$topic['id']."'>".$topic['subject']."</a></li>";
                                    echo "<li id='date'>".$topic['date']."</li>";
                                    echo "<li id='userName'>".$topic['username']."</li></ul></div></ul><br />";
                                }
                            }
                           
                            ?>
                   </li>
                   	<li style=" list-style: none">
                   
                    <?php /*nếu đang ở 1 page thì in số thứ thự page đó bằng màu khác*/				
                        echo"<ul style='margin-left:450px'>";
                        for ( $page = 0; $page <= $numsOfPage; $page ++ ){
                           if($page == $currentPage){
                            echo "<li style='list-style:none; background: #777; float:left;position:relative;border: 1px solid #FFF; width:15px'><a href='forum.php?category={$category}&page={$page}' style='color: #FFF'>{$page} </a></li>";}
                            else{ echo "<li style='list-style:none; float:left; border: 1px solid #cfc; width:15px'><a href='forum.php?category={$category}&page={$page}' style='color: #FFF'>{$page} </a></li>";
                            }
                        }
                        echo"</ul>";
                    ?>
                   </li>
                </ul>
            </th> 
            
            <th id="markedTopics">
       		</th>
        	</tr>
        </table> 
              
    </div>
</body>
</html>