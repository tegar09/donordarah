<?php

include('koneksi.php');
$nodaftar = $_POST["nodaftar"];
// sql to delete a record
$sql = "DELETE FROM pendonor WHERE nodaftar='$nodaftar'";

if ($conn->query($sql) === TRUE) {
  header('Location: table.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>