<?php
require_once('lib/CheckPassword.php');
	
	$usernameMinChars = 6;
	$errors = array();
	
	//checking the username
	if (strlen($username) < $usernameMinChars) {
		$errors[] = 'Username must be at least 6 characters long';
	} else if (preg_match('/\s/', $username)) {
		$errors[] = 'Username should not contain spaces.';
	}

	$checkPassword = new CheckPassword($password, 10);
	$checkPassed = $checkPassword->check();
	if($checkPassed) {
		$results = array('password OK');
	} else {
		$results = array_merge($errors, $checkPassword->getErrors());
	}
	if($password != $repassword) {
		$errors[] = 'Your passwords do not match';
	}
	if ($errors) {
		$results = $errors;
	} else {
		$results = array('All OK');
	}
?>