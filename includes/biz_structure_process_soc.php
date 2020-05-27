<?php
session_start();

if (isset($_POST['bizstructuresoc-update'])) {
	
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
$k = mysqli_real_escape_string($conn, $_POST['radio90']);
$l = mysqli_real_escape_string($conn, $_POST['radio91']);
$m = mysqli_real_escape_string($conn, $_POST['radio92']);
$n = mysqli_real_escape_string($conn, $_POST['radio93']);


	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h) || empty($i) || empty($j) || empty($k) || empty($l) || empty($m) || empty($n)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrSOC WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizStrSOC SET 
			sdataq47=?,
			sdataq48=?,
			sdataq49=?,
			sdataq50=?,
			sdataq51=?,
			sdataq52=?,
			sdataq53=?,
			sdataq54=?,
			sdataq55=?,
			sdataq56=?,
			sdataq57=?,
			sdataq58=?,			
			sdataq59=?,
			sdataq60=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "ssssssssssssss", $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrSOC(sdatausersid, sdatauid, sdataq47, sdataq48, sdataq49, sdataq50, sdataq51, sdataq52, sdataq53, sdataq54, sdataq55, sdataq56, sdataq57, sdataq59, sdataq60) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);
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


