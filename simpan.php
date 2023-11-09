<?php
include 'proses.php';

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$tlpn = $_POST['tlpn'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nim','$nm_mhs','$alamat','$tlpn')");


header("location:index.php");