<?php
session_start();

//check that the form has been submitted
if($_POST && !empty($_POST['name'])) {
	$_SESSION['name'] = $_POST['name'];
}
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
	echo 'Hello, ' . $_SESSION['name'] . '! ' .'<a href="sessions_03.php">Next</a>';
} else {
	echo 'Who are you? ' . '<a href="sessions_01.php">login</a>';
}
?>
<p>This is my web page</p>

</body>
</html>