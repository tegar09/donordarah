<?php
include('koneksi.php');


$noktpsim = $_POST["noktpsim"];
$nmlengkap = $_POST["nmlengkap"];
$tgllahir = $_POST["tgllahir"];
$usia = $_POST["usia"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$notelp = $_POST["notelp"];
$dnrterakhir = $_POST["dnrterakhir"];
$goldar = $_POST["goldar"];

$sql = "INSERT INTO pendonor VALUES (NULL,'$noktpsim', '$nmlengkap', '$tgllahir', '$usia', '$jk', '$alamat', '$notelp', '$dnrterakhir','$goldar', current_timestamp())";

$conn->query($sql);
$conn->close();


session_start();
$_SESSION['noktpsim'] = $noktpsim;


header("location:modalregist.php");

?>
