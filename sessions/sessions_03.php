<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Title Goes Here</title>
</head>
<body>
<?php 
if(isset($_SESSION['name'])) {
	echo 'See? I remembered you, ' . $_SESSION['name'] . '! ';
}
//unset session variable
$_SESSION = array();

//invalidate the session cookie
if(isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-86400);
	echo 'Go back ' . '<a href="sessions_02.php">go back to page 2</a>';
} else {
	echo 'Who are you? ' . '<a href="sessions_01.php">login</a>';
}

ob_end_flush();

//destroy the session
session_destroy();
?>
<p>This is my web page</p>

</body>
</html>