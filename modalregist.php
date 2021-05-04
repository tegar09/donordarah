<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Palang Merah Indonesia</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
</head>

<body>

<?php session_start();
include('koneksi.php');
$ktp = $_SESSION["noktpsim"];
$sql2 = "SELECT * FROM pendonor where noktpsim= $ktp";
$result = $conn->query($sql2);

while($row = mysqli_fetch_array($result))
{               
?>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pesan untuk <?php echo $row['nmlengkap'];?>  </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              
            <p>Selamat pendaftaran telah berhasil dilakukan. Berikut nomor registrasi anda: <b><?php echo $row['nodaftar'];?></b></p>
               
              
            <div>
                     Silahkan datang ke kantor PMI dengan membawa nomor registrasi tersebut. Catat atau screen capture halaman ini. Kemudian tunjukkan nomor registrasi kepada petugas untuk proses donor.
                     Terima Kasih.
            </div>
            </div>
          <!-- <button align="right" type="submit" class="btn btn-danger"> -->
            <a rel="nofollow" href="index.html" class="btn btn-danger">OK</a>
          <!-- </button> <--></-->
          
        </div>
    </div>
</div>

<?php
}
?>

</body>
</html>