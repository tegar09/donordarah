<?php
include('koneksi.php');

// $totalA = $conn->query("SELECT count(*)FROM pendonor WHERE goldar = 'A'");
// $totalB = $conn->query("SELECT count(*)FROM pendonor WHERE goldar = 'B'");
// $totalAB = $conn->query("SELECT count(*)FROM pendonor WHERE goldar = 'AB'");
// $totalO = $conn->query("SELECT count(*)FROM pendonor WHERE goldar = 'O'");

$A = $conn->query("select * from pendonor where goldar='A'");
$B = $conn->query("select * from pendonor where goldar='B'");
$AB = $conn->query("select * from pendonor where goldar='AB'");
$O = $conn->query("select * from pendonor where goldar='O'");

$result = $conn->query("SELECT MONTHNAME(created_at) MONTH, COUNT(*) COUNT
					FROM pendonor WHERE YEAR(created_at)=YEAR(CURRENT_TIMESTAMP)
					GROUP BY MONTH(created_at)");


$bul = array();
$val = array();
foreach ($result as $row) {
  $bul[] = $row["MONTH"];
  $val[] = $row["COUNT"];
}
// echo implode(",",$bul);
// echo implode(",",$val);

$bul1='"'.implode('","', $bul).'"';
$val1='"'.implode('","', $val).'"';

$ttl = $conn->query("select * from pendonor");
$y = $conn->query("select * from pendonor where YEAR(created_at)=YEAR(CURRENT_TIMESTAMP)");
$m = $conn->query("select * from pendonor where MONTH(created_at)=MONTH(CURRENT_TIMESTAMP)");
$t = $conn->query("select * from pendonor where created_at=DATE(CURRENT_TIMESTAMP)");


echo $ttl->num_rows;

// $conn->close();
// ?>