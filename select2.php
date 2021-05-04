<?php
include('koneksi.php');
$noktpsim = $_POST["noktpsim"];
$sql = "SELECT * FROM pendonor where noktpsim='$noktpsim'";
$result = $conn->query($sql);

$conn->close();
?>