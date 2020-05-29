<?php


$servername = "";

$dBUsername = "root";

$dBPassword = "";

$dBName = "";



$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
	die("Connection failed to load: ".mysqli_connect_error());
	
}
