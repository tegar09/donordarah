<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pendaftaran - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">

<?php
if($_SESSION["nama"]) {
?>
   	
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Welcome <?php echo $_SESSION["nama"]; ?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                             <a class="nav-link" href="table.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pendaftaran
                            </a>
                            <a class="nav-link" href="chart.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Stok Darah
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pendonor</li>
                        </ol>
                        </h1>
                        <div class="row">

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> No KTP/SIM </th>
												<th> Nama Lengkap </th>
												<th> Tanggal Lahir </th>
												<th> Usia </th>
												<th> JK </th>
												<th> Alamat </th>
												<th> No Telepon </th>
												<th> Donor Terakhir </th>
												<th> Golongan Darah </th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                        <?php
										include('select.php');
											if ($result->num_rows>0){
												while($row = $result-> fetch_assoc()){
										?>

                                            <tr>
												<td> <?php echo $row["noktpsim"];?></td>
												<td> <?php echo $row["nmlengkap"];?> </td>
												<td> <?php echo $row["tgllahir"];?> </td>
												<td> <?php echo $row["usia"];?> </td>
												<td> <?php echo $row["jk"];?> </td>
												<td> <?php echo $row["alamat"];?> </td>       <td> <?php echo $row["notelp"];?> </td>
												<td> <?php echo $row["dnrterakhir"];?> </td>
												<td> <?php echo $row["goldar"];?> </td> 

												  <td class="text-right">
												  <div style="display: inline-flex; align-items: center; width: 100%;">										
												  <form method="post" action="edit.php">
												  <input type="hidden" name="noktpsim" value="<?php echo $row["noktpsim"] ;?>">
												  <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i></button>
												  </form>
												  &nbsp;&nbsp;&nbsp;
												  <form method="post" action="hapus.php">
												  <input type="hidden" name="nodaftar"
                                                  value="<?php echo $row["nodaftar"];?>">
												  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
												  </form>
												 </div> 
												 </td>

											</tr>
                                         <?php
												}
											}else {
												echo "0 result";
											}					
											?>   
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

<?php
}else echo "<h1>Please login first .</h1>";
?> 

</html>

