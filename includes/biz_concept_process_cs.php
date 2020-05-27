<?php
session_start();

if (isset($_POST['bizconceptcs-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$a = mysqli_real_escape_string($conn, $_POST['radio0']);
$b = mysqli_real_escape_string($conn, $_POST['radio1']);
$c = mysqli_real_escape_string($conn, $_POST['radio2']);
$d = mysqli_real_escape_string($conn, $_POST['radio3']);
$e = mysqli_real_escape_string($conn, $_POST['radio4']);
$f = mysqli_real_escape_string($conn, $_POST['radio5']);
$g = mysqli_real_escape_string($conn, $_POST['radio6']);
$h = mysqli_real_escape_string($conn, $_POST['radio7']);

	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h)) {
		
	header("Location: ../biz_concept.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizConCS WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizConCS SET 
			sdataq87=?,
			sdataq88=?,
			sdataq89=?,
			sdataq90=?,
			sdataq91=?,
			sdataq92=?,
			sdataq93=?,
			sdataq94=?			
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssss", $a, $b, $c, $d, $e, $f, $g, $h);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_concept.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizConCS (sdatausersid, sdatauid, sdataq87, sdataq88, sdataq89, sdataq90, sdataq91, sdataq92, sdataq93, sdataq94) VALUES (?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f, $g, $h);
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


