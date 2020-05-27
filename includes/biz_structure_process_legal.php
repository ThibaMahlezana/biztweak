<?php
session_start();

if (isset($_POST['bizstructurelegal-update'])) {
	
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
$o = mysqli_real_escape_string($conn, $_POST['radio94']);
$p = mysqli_real_escape_string($conn, $_POST['radio95']);
$q = mysqli_real_escape_string($conn, $_POST['radio96']);
$r = mysqli_real_escape_string($conn, $_POST['radio97']);
$s = mysqli_real_escape_string($conn, $_POST['radio98']);
$t = mysqli_real_escape_string($conn, $_POST['radio99']);
$u = mysqli_real_escape_string($conn, $_POST['radio990']);
$v = mysqli_real_escape_string($conn, $_POST['radio991']);
$w = mysqli_real_escape_string($conn, $_POST['radio992']);
$x = mysqli_real_escape_string($conn, $_POST['radio993']);
$y = mysqli_real_escape_string($conn, $_POST['radio994']);
$z = mysqli_real_escape_string($conn, $_POST['radio995']);
$aa = mysqli_real_escape_string($conn, $_POST['radio996']);
$ab = mysqli_real_escape_string($conn, $_POST['radio997']);
$ac = mysqli_real_escape_string($conn, $_POST['radio998']);
$ad = mysqli_real_escape_string($conn, $_POST['radio999']);
$ae = mysqli_real_escape_string($conn, $_POST['radio9990']);



	
	


	if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h) || empty($i) || empty($j) || empty($k) || empty($l) || empty($m) || empty($n) || empty($o) || empty($p) || empty($q) || empty($r) || empty($s) || empty($t) || empty($u) || empty($v) || empty($w) || empty($x) || empty($y) || empty($z) || empty($aa) || empty($ab) || empty($ac) || empty($ad) || empty($ae)) {
		
	header("Location: ../biz_structure.php?error=emptyfields");
	exit ();
	}






else {



		$sql = "SELECT sdatauid FROM bizStrLegal WHERE sdatauid=?";
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
			
			$sql = "UPDATE bizStrLegal SET 
			sdataq15=?,
			sdataq16=?,
			sdataq17=?,
			sdataq18=?,
			sdataq19=?,
			sdataq20=?,
			sdataq21=?,
			sdataq22=?,
			sdataq23=?,
			sdataq24=?,
			sdataq25=?,
			sdataq26=?,			
			sdataq27=?,
			sdataq28=?,
			sdataq29=?,
			sdataq30=?,
			sdataq31=?,
			sdataq32=?,
			sdataq33=?,
			sdataq34=?,
			sdataq35=?,
			sdataq36=?,
			sdataq37=?,
			sdataq38=?,
			sdataq39=?,
			sdataq40=?,
			sdataq41=?,
			sdataq42=?,
			sdataq44=?,
			sdataq45=?,
			sdataq46=?
			WHERE sdatauid='$_SESSION[email]'";
			$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
			else {
				mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssss", $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t, $u, $v, $w, $x, $y, $z, $aa, $ab, $ac, $ad, $ae);
				mysqli_stmt_execute($stmt);
				header("Location:../biz_structure.php?submission=success");
				exit();}
			
			
		}
		
		
		
		
		else {
			$sql = "INSERT INTO bizStrLegal(sdatausersid, sdatauid, sdataq15, sdataq16, sdataq17, sdataq18, sdataq19, sdataq20, sdataq21, sdataq22, sdataq23, sdataq24, sdataq25, sdataq26, sdataq27, sdataq28, sdataq29, sdataq30, sdataq31, sdataq32, sdataq33, sdataq34, sdataq35, sdataq36, sdataq37, sdataq38, sdataq39, sdataq40, sdataq41, sdataq42, sdataq43, sdataq44, sdataq45, sdataq46) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../biz_structure.php?error=sqlerror");
			exit();
		}
		
		else {
			
			mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssss", $_SESSION['userid'],$_SESSION['email'], $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t, $u, $v, $w, $x, $y, $z, $aa, $ab, $ac, $ad, $ae);
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


