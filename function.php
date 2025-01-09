<?php
session_start();
$host = "sql312.infinityfree.com";
$user = "if0_38051364";
$password = "lmGo3j8JZJDwh";
$database = "if0_38051364_atkstok";




//Membuat koneksi ke database
$conn = mysqli_connect("sql312.infinityfree.com","if0_38051364","lmGo3j8JZJDwh","if0_38051364_atkstok");

if (!$conn) {
    die("koneksi terputus :" . mysqli_connect_error());    # code...
}
?>