<?php
include('koneksi.php');

$sim = $_POST["sim"];
$nmlengkap = $_POST["nmlengkap"];
$tgllahir = $_POST["tgllahir"];
$usia = $_POST["usia"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$notelp = $_POST["notelp"];
$dnrterakhir = $_POST["dnrterakhir"];
$goldar = $_POST["goldar"];
$nodaftar = $_POST["nodaftar"];

// echo $sim;
// echo $nmlengkap;
// echo $tgllahir;
// echo $usia;
// echo $jk;
// echo $alamat;
// echo $notelp;
// echo $dnrterakhir;
// echo $nodaftar;

$sql = "UPDATE pendonor set noktpsim='$sim', nmlengkap='$nmlengkap', tgllahir='$tgllahir', usia='$usia', jk='$jk', alamat='$alamat', notelp='$notelp', dnrterakhir='$dnrterakhir', goldar='$goldar' where nodaftar='$nodaftar'";
$result = $conn->query($sql);


$conn->close();
header('Location:table.php');