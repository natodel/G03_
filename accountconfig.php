<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" /> 
</head>

<body>
<?php	
	@mysql_connect("localhost", "root", "") or die ('Can not connect to host');
	@mysql_select_db("data_userweb");
?>
<div class="header" style="background-color: #0FF">
 <a href="index.php" ><img class="logo" src="images/logo.png"  alt="logo" title="Trang chủ Góc sẻ chia" width="82px" height="82px" /></a>
</div>
<div class="basicinfo">
   <div class="profilepicture>
    	<a href="#"><img src="#"></a>
  </div>
  <table>
	  <tr>
		<th scope="user name">Tên đăng nhập</th>
		<td>#</td>
	  </tr>
      <tr>
      	<th scope="joinedday"> Ngày tham gia</th>
		<td> #</td>
      </tr>
	  <tr>
		<th scope="gender">Giới tính</th>
		<td >#</td>
	  </tr>
	  <tr>
		<th scope="dateofbirth">Ngày sinh</th>
		<td >#</td>
	  </tr>
	  <tr>
		<th scope="email">Email đăng kí</th>
		<td>#</td>
	  </tr>
  	</table>
 </div>
<form class="changeinfo"  id="changeinfo" method="post" action="changeaccount1.php">
  <blockquote>
    <p>
      <input type="submit" id="info" name="info" value="change infomation" title="Sửa đổi thông tin" />
    </p>
  </blockquote>
</form>
<div class="topic">
	<ul> topic1</ul>
    <ul> topic1</ul>
</div> 
</body>
</html>