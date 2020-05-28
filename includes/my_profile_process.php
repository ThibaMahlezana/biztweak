<?php
session_start();

if (isset($_POST['myprofile-update'])) {
	require 'dbh.php';
	// Escape special characters, if any
	$a = mysqli_real_escape_string($conn, $_POST['pifname']);
	$b = mysqli_real_escape_string($conn, $_POST['pilname']);
	$c = mysqli_real_escape_string($conn, $_POST['piidno']);
	$d = mysqli_real_escape_string($conn, $_POST['picellno']);
	$e = mysqli_real_escape_string($conn, $_POST['piresadd']);
	$f = mysqli_real_escape_string($conn, $_POST['piflb']);
	$g = mysqli_real_escape_string($conn, $_POST['piedu']);
	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g)) {
		header("Location: ../my_profile.php?error=emptyfields");
		exit ();
	}
	else {
		$sql = "SELECT sdatauid FROM myProfile WHERE sdatauid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../my_profile.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				$sql = "UPDATE myProfile SET 
				sdataq119=?,
				sdataq120=?,
				sdataq121=?,
				sdataq122=?,
				sdataq123=?,
				sdataq124=?,
				sdataq125=?			
				WHERE sdatauid='$_SESSION[email]'";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../my_profile.php?error=sqlerror");
				exit();
				}
				else {
				mysqli_stmt_bind_param($stmt, "sssssss", $a, $b, $c, $d, $e, $f, $g);
				mysqli_stmt_execute($stmt);
				header("Location:../my_profile.php?submission=success");
				exit();}
			}
			else {
				$sql = "INSERT INTO myProfile(sdatausersid, sdatauid, sdataq119, sdataq120, sdataq121, sdataq122, sdataq123, sdataq124, sdataq125) VALUES (?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../my_profile.php?error=sqlerror");
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt, "sssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f, $g);
					mysqli_stmt_execute($stmt);
					header("Location:../my_profile.php?submission=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:my_profile.php?error=fatalerror");
	exit ();	
}



