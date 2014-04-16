<?php

//find Session
session_start();

//destroy all value of session
$_SESSION = array();

//destroy all cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), time() - 36000, '/', 0, 0);
}

//destroy Session
session_destroy();

//connect to homepage
header('Location: index.php');
?>