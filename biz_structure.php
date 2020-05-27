<?php
session_start();
?>

<?php

if (isset ($_SESSION['username']))	{
	
	
header("Location:includes/biz_structure.php");		
	
	
}

else {
	
header("Location:../index.php");
	
}


?>