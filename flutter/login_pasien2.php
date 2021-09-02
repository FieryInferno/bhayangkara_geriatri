<?php
include "config.php";

    class usr{}
    
    $no_ktp = $_POST["no_ktp"];
    $password = $_POST["password"];

    
    $queryResult = mysqli_query($connect, "SELECT * FROM pasien WHERE no_ktp='".$no_ktp."' AND password='".$password."'");
    
    if (!$queryResult) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
	}
	
	$row = mysqli_fetch_array($queryResult);
    
  	 if (!empty($row)){
	 	$response = new usr();
	 	$response->response_code = "00";
	 	$response->response_msg = "Login berhasil";
	 	$response->data = array('id_pasien' => $row['id_pasien'],
								'nama_lengkap' => $row['nama_lengkap'],
								'no_hp' => $row['no_hp'],
                                'tanggal_lahir' => $row['tanggal_lahir'],
                                'no_ktp' => $row['no_ktp'],
                                'jenis_kelamin' => $row['jenis_kelamin'],
                                'agama' => $row['agama'],
                                'pendidikan' => $row['pendidikan'],
                                'alamat' => $row['alamat'],
								'email' => $row['email']);
	 	die(json_encode($response));
		
	 } else { 
	 	$response = new usr();
	 	$response->response_code = "99";
	 	$response->response_msg = "Login gagal";
	 	die(json_encode($response));
	 }
	
	 mysqli_close($conn);
?>