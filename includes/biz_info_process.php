<?php
session_start();

if (isset($_POST['bizinfo-update'])) {
	
	require 'dbh.php';
	

// Escape special characters, if any
$ename = mysqli_real_escape_string($conn, $_POST['entname']);
$enumber = mysqli_real_escape_string($conn, $_POST['entnum']);
$eregdate = mysqli_real_escape_string($conn, $_POST['regdate']);
$eaddress = mysqli_real_escape_string($conn, $_POST['entadd']);
$ebiography = mysqli_real_escape_string($conn, $_POST['entbio']);
$estatus = mysqli_real_escape_string($conn, $_POST['entsta']);
$eindustry = mysqli_real_escape_string($conn, $_POST['entind']);
$eoffering = mysqli_real_escape_string($conn, $_POST['entprods']);
	
	


	if (empty($ename) || empty($enumber) || empty($eregdate) || empty($eaddress) || empty($ebiography) || empty($estatus) || empty($eindustry) || empty($eoffering)) {
		
	header("Location: ../biz_info.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizInfo WHERE sdatauid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_info.php?error=sqlerror");
			exit();
		}
	
	
	else {
		mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		
		if ($resultCheck > 0) {
			
			$sql = "UPDATE bizInfo SET 
			sdataq1=?,
			sdataq2=?,
			sdataq3=?,
			sdataq4=?,
			sdataq5=?,
			sdataq6=?,
			sdataq7=?,
			sdataq8=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_info.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssss", $ename, $enumber, $eregdate, $eaddress, $ebiography, $estatus, $eindustry, $eoffering);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_info.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizInfo (sdatausersid, sdatauid, sdataq1, sdataq2, sdataq3, sdataq4, sdataq5, sdataq6, sdataq7, sdataq8) VALUES (?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_info.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['userid'],$_SESSION['email'], $ename, $enumber, $eregdate, $eaddress, $ebiography, $estatus, $eindustry, $eoffering);
			mysqli_stmt_execute($stmt);
			header("Location:../biz_info.php?submission=success");
			exit();
		}
		
		}
	}
	
}



mysqli_stmt_close($stmt);
mysqli_close($conn);



}

else {
	
header("Location:biz_info.php?error=fatalerror");
exit ();	
}


