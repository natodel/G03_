<?php
	session_start();
	require_once('config.php');
	if ((!isset($_SESSION['current_user'])) || ($_SESSION['level'] == 2)) exit();
	if ($_SESSION['level'] == 1)
	{
		$id = $_GET['id'];
		$delete = mysql_query("DELETE FROM users where id=$id");
		header('Location: usersManagment.php');
	}
?>