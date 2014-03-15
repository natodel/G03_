<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//init user
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = '';
	$db_data = "data_userweb";
	@mysql_connect("{$db_host}", "{$db_user}", "{$db_pass}") or die ('Can not connect to sever');
	@mysql_select_db("{$db_data}") or die ('Can not connect to database');
?>