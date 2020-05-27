<?php
session_start();

if (isset($_POST['bizstructurefinman-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$a = mysqli_real_escape_string($conn, $_POST['radio0']);
$b = mysqli_real_escape_string($conn, $_POST['radio1']);
$c = mysqli_real_escape_string($conn, $_POST['radio2']);
$d = mysqli_real_escape_string($conn, $_POST['radio3']);
$e = mysqli_real_escape_string($conn, $_POST['radio4']);


	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrFinMan WHERE sdatauid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
	
	
	else {
		mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		
		if ($resultCheck > 0) {
			
			$sql = "UPDATE bizStrFinMan SET 
			sdataq77=?,
			sdataq78=?,
			sdataq79=?,
			sdataq80=?,
			sdataq81=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "sssss", $a, $b, $c, $d, $e);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrFinMan (sdatausersid, sdatauid, sdataq77, sdataq78, sdataq79, sdataq80, sdataq81) VALUES (?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "sssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e);
			mysqli_stmt_execute($stmt);
			header("Location:../biz_structure.php?submission=success");
			exit();
		}
		
		}
	}
	
}



mysqli_stmt_close($stmt);
mysqli_close($conn);



}

else {
	
header("Location:biz_structure.php?error=fatalerror");
exit ();	
}


