<?php
session_start();

if (isset($_POST['bizconceptcusrel-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$a = mysqli_real_escape_string($conn, $_POST['radio0']);
$b = mysqli_real_escape_string($conn, $_POST['radio1']);
$c = mysqli_real_escape_string($conn, $_POST['radio2']);
$d = mysqli_real_escape_string($conn, $_POST['radio3']);

	
	


	if (empty($a) || empty($b) || empty($c) || empty($d)) {
		
	header("Location: ../biz_concept.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizConCusRel WHERE sdatauid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
	
	
	else {
		mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		
		if ($resultCheck > 0) {
			
			$sql = "UPDATE bizConCusRel SET 
			sdataq99=?,
			sdataq100=?,
			sdataq101=?,
			sdataq102=?			
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssss", $a, $b, $c, $d);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_concept.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizConCusRel (sdatausersid, sdatauid, sdataq99, sdataq100, sdataq101, sdataq102) VALUES (?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d);
			mysqli_stmt_execute($stmt);
			header("Location:../biz_concept.php?submission=success");
			exit();
		}
		
		}
	}
	
}



mysqli_stmt_close($stmt);
mysqli_close($conn);



}

else {
	
header("Location:biz_concept.php?error=fatalerror");
exit ();	
}


