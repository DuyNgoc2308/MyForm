<?php

$userp = $_POST["usern"];
$passp = $_POST["passw"];


if ($userp == "admin" && $passp =="admin") {
	echo "Login successful!";
}else{
	echo "Something went wrong!";
}

?>