<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

//check session set
if(!isset($_SESSION['uid'])){
	session_write_close();
	header('HTTP/1.1 303 See other');
	header('Location: ../index.php');
	exit();	
}

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header('Location: ../index.php');
?>