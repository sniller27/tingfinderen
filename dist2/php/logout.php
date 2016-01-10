<?php
session_start();

//check session set
if(!isset($_SESSION['uid'])){
	session_write_close();
	header('HTTP/1.1 303 See other');
	header('Location: ../index.php');
	exit();	
}

//unset all of the session variables.
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

//redirects to index page
header('Location: ../index.php');
?>