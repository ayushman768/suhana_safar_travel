<?php

$servername = "localhost";
$Username = "root";
$assworld = "";
$dbNAme = "suhana_safar_travel";

$conn = mysqli_connect($servername,$Username,$assworld,$dbNAme);

if($conn){
	//echo "Connection Ok";
}else{
	echo "connection faild";
}
?>


