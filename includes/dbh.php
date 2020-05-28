<?php


$servername = "db-biztweak.cwa2ohztrnrz.eu-west-1.rds.amazonaws.com";

$dBUsername = "root";

$dBPassword = "tweakbizcoza";

$dBName = "testing";



$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
	die("Connection failed to load: ".mysqli_connect_error());
	
}
