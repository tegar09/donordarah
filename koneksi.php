 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donordarah";

//Buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>