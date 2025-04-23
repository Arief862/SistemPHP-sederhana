<?php
$koneksi = mysqli_connect(hostname: "localhost", username:"root", password:"", database:"db_buku");
if  (!$koneksi){
    die("koneksi gagal: " . mysqli_connect_error());
}