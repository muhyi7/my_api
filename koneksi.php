<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "my_api";

$koneksi = mysqli_connect($hostName, $userName, $password, $dbName);

if(!$koneksi){
    echo "koneksi gagal";
}else{
    echo "koneksi berhasil";
}