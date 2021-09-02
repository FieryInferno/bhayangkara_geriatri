<?php 
include "config.php";

  
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_ktp = $_POST['no_ktp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $alamat = $_POST['alamat'];
$email = $_POST['email'];
    $password = $_POST['password'];
    $created_at = $_POST['created_at'];
  
 
        $query = "INSERT INTO pasien (nama_lengkap,
        no_hp,
        tanggal_lahir,
        no_ktp,
        jenis_kelamin,
        agama,
        pendidikan,
        alamat,
        email,
        created_at,
        password)
  			  VALUES('$nama_lengkap',
  			  '$no_hp',
  			  '$tanggal_lahir',
  			  '$no_ktp',
  			  '$jenis_kelamin',
  			  '$agama',
  			  '$pendidikan',
  			  '$alamat',
  			  '$email',
  			  '$created_at',
  			  '$password')";
    $results = mysqli_query($connect, $query);
  if($results>0)
    {
        echo "user added successfully";
    }
    ?>