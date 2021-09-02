<?php
include "config.php";

    
    $password = $_POST['password'];
    $no_ktp = $_POST['no_ktp'];
   
    
   
    
    $queryResult=$connect->query("SELECT * FROM pasien WHERE no_ktp='".$no_ktp."' and password='".$password."'");
 $result = array();

   while($fetchData =$queryResult-> fetch_assoc()){
       $result[]=$fetchData;
   }
    echo json_encode($result);
?>
