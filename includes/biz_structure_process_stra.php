<?php
session_start();

if (isset($_POST['bizstructurestra-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$a = mysqli_real_escape_string($conn, $_POST['radio0']);
$b = mysqli_real_escape_string($conn, $_POST['radio1']);
$c = mysqli_real_escape_string($conn, $_POST['radio2']);
$d = mysqli_real_escape_string($conn, $_POST['radio3']);
$e = mysqli_real_escape_string($conn, $_POST['radio4']);
$f = mysqli_real_escape_string($conn, $_POST['radio5']);


	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrStra WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizStrStra SET 
			sdataq71=?,
			sdataq72=?,
			sdataq73=?,
			sdataq74=?,
			sdataq75=?,
			sdataq76=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssss", $a, $b, $c, $d, $e, $f);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrStra (sdatausersid, sdatauid, sdataq71, sdataq72, sdataq73, sdataq74, sdataq75, sdataq76) VALUES (?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f);
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


