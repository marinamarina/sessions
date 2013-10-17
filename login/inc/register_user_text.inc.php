<?php
require_once('lib/CheckUsername.php');
require_once('lib/CheckPassword.php');

	$checkPassword = new CheckPassword($password, $repassword, 10);
	$checkUsername = new CheckUsername($username);

	$passwordOK = $checkPassword->check();
	$usernameOK = $checkUsername->check();

	if($passwordOK && $usernameOK) {
		$results = array('password OK');
	} else {
		$results = array_merge($checkUsername->getErrors(), $checkPassword->getErrors());
	}
	// if($password != $repassword) {
	// 	$errors[] = 'Your passwords do not match';
	// }
	// if ($errors) {
	// 	$results = $errors;
	// } else {
	// 	$results = array('All OK');
	// }
?>