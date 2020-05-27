<?php
session_start();

if (isset($_POST['bizstructureorg-update'])) {
	
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
$i = mysqli_real_escape_string($conn, $_POST['radio8']);
$j = mysqli_real_escape_string($conn, $_POST['radio9']);


	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h) || empty($i) || empty($j)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrOrg WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizStrOrg SET 
			sdataq61=?,
			sdataq62=?,
			sdataq63=?,
			sdataq64=?,
			sdataq65=?,
			sdataq66=?,
			sdataq67=?,
			sdataq68=?,
			sdataq69=?,
			sdataq70=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssssss", $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrOrg(sdatausersid, sdatauid, sdataq61, sdataq62, sdataq63, sdataq64, sdataq65, sdataq66, sdataq67, sdataq68, sdataq68, sdataq70) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
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


