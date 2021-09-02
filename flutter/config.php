<?php
$host="localhost";
$username="rsbmgeri_bhayangkara";
$password="NaonWeAh00!@";
$db_name="rsbmgeri_bhayangkara_geriatri";

$connect=mysqli_connect($host,$username,$password,$db_name);


if(!$connect)
{
	echo json_encode("Connection Failed");
}else{
}

?>