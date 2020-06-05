<?php

if (isset($_POST['signup-submit'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$username = mysqli_real_escape_string($conn, $_POST['uname']);
$email = mysqli_real_escape_string($conn, $_POST['emailad']);
$type = mysqli_real_escape_string($conn, $_POST['radio1']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);
$passwordrepeat = mysqli_real_escape_string($conn, $_POST['pswc']);
	
if (empty($type)){
	$type = "Admin";
}
	
	if (empty($username) || empty($email)|| empty($password) || empty($passwordrepeat) || empty($type)) {
		header("Location:../index.php?error=emptyfields");
		exit();
	// } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
	// 	header("Location:../index.php?error=invalidemailusername");	
	// 	exit ();		
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location:../index.php?error=invalidemail");
		exit ();	
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location:../index.php?error=invalidusername&emailad=".$email);
		exit();	
	} else if ($password !== $passwordrepeat) {
		header("Location:../index.php?error=passwordcheck&uname=".$username."&emailad=".$email."&emailad=".$email);		
		exit();
	} else {
		$sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror1");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header ("Location: ../index.php?error=userexists");
				exit();
			} else {
				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, typers) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../index.php?error=sqlerror2");
					exit ();  
				} else {
					$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssss",$username, $email, $hashedpwd, $type);
					mysqli_stmt_execute($stmt);
					header("Location: ../index.php?signup=success");
					exit ();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	} else {
		header("Location: ../index.php");
		exit ();	
	}


