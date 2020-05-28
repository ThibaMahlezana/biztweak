<?php

if (isset($_POST['login-submit'])) {

	require 'dbh.php';
	

// Escape special characters, if any
$email = mysqli_real_escape_string($conn, $_POST['emailad']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);
	
	
	
	if (empty($email) || empty($password)) {
		
	header("Location: ../index.php?error=emptyfields");
	exit ();
	}
	
	else {
		$sql = "SELECT * FROM users WHERE emailUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../index.php?error=sqlerror");
	exit ();			
		}
		
	else {
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		
		if ($row = mysqli_fetch_assoc($result)) {
			$pswCheck = password_verify($password, $row['pwdUsers']);
			if ($pswCheck == false) {
						header("Location: ../index.php?error=wrongpassword");
						exit ();	
				
			}
			
			else if ($pswCheck == true) {
			session_start();
			$_SESSION['userid'] = $row ['idUsers'];
			$_SESSION['username'] = $row ['uidUsers'];
			$_SESSION['email'] = $row ['emailUsers'];
						header("Location: ../dashboard.php?login=success");
						exit ();	

			
			}
			
			
			else {
						header("Location: ../index.php?error=wrongpassword");
						exit ();				
			}
		}
		
		else {
			header("Location: ../index.php?error=nouser");
	exit ();	
		}
	}
		
	}
}


else {
	header("Location: ../index.php");
	exit ();
	
}