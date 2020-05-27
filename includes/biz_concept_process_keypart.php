<?php
session_start();

if (isset($_POST['bizconceptkeypart-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$a = mysqli_real_escape_string($conn, $_POST['radio0']);
$b = mysqli_real_escape_string($conn, $_POST['radio1']);
	
	


	if (empty($a)) {
		
	header("Location: ../biz_concept.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizConKeyPart WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizConKeyPart SET 
			sdataq109=?,
			sdataq110=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ss", $a, $b);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_concept.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizConKeyPart (sdatausersid, sdatauid, sdataq109, sdataq110) VALUES (?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_concept.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssss", $_SESSION['userid'],$_SESSION['email'], $a, $b);
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


