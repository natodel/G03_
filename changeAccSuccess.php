<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="css/changeAccStyle.css" /> 
  <link rel="shortcut icon" href="images/logo.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="5;index.php">
	<title>Thay đổi thành công</title>
		<script>
		var c = 5;
		var t;
		var value=0;
		var time =1000;
    	function timeCount(){
			c=c-1;
			document.getElementById('time').innerHTML = c;
			t = setTimeout("timeCount()",parseInt(time));
			}
    </script>
</head>

<body onload="timeCount()">
  	<header>
    	<a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" width="82px" height="82px" /></a>
   <hr size="5px" noshade color="#CCCCCC" />
    </header>
    <div align="center">
  		<h1 style="color:green;">Thay đổi tài khoản thành công!</h1>
    	<p style="font-weight:600;font-size:18px" >Sẽ tự động chuyển tới <a href="index.php">Trang chủ</a> sau <span id='time' style="color:#CF0"> </span> s </p>
  </div>
</body>
</html>