<?php
session_start();
?>

<?php

if (isset ($_SESSION['username']))	{
	
	
header("Location:includes/biz_concept.php");		
	
	
}

else {
	
header("Location:../index.php");
	
}


?>