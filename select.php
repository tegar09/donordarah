<?php
include('koneksi.php');
$sql = "SELECT * FROM pendonor";
$result = $conn->query($sql);
$conn->close();
?>