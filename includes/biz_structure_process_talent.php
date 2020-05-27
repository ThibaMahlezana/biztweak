<?php
session_start();

if (isset($_POST['bizstructuretalent-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$ename = mysqli_real_escape_string($conn, $_POST['radio0']);
$enumber = mysqli_real_escape_string($conn, $_POST['radio1']);
$eregdate = mysqli_real_escape_string($conn, $_POST['radio2']);
$eaddress = mysqli_real_escape_string($conn, $_POST['radio3']);
$ebiography = mysqli_real_escape_string($conn, $_POST['radio4']);
$estatus = mysqli_real_escape_string($conn, $_POST['radio5']);
	
	


	if (empty($ename) || empty($enumber) || empty($eregdate) || empty($eaddress) || empty($ebiography) || empty($estatus)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrTalent WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizStrTalent SET 
			sdataq9=?,
			sdataq10=?,
			sdataq11=?,
			sdataq12=?,
			sdataq13=?,
			sdataq14=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssss", $ename, $enumber, $eregdate, $eaddress, $ebiography, $estatus);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrTalent(sdatausersid, sdatauid, sdataq9, sdataq10, sdataq11, sdataq12, sdataq13, sdataq14) VALUES (?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION['userid'],$_SESSION['email'], $ename, $enumber, $eregdate, $eaddress, $ebiography, $estatus);
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


