<?php
session_start();
?>

<?php

if (isset ($_SESSION['username']))	{
	
	
header("Location:includes/dashboard.php");		
	
	
}

else {
	
header("Location:../index.php");
	
}


?>