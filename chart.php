
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
        <title>Stok Darah - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    </head>

    <body class="sb-nav-fixed">

<?php
if($_SESSION["nama"]) {
?>
    
 <?php
    include('koneksi.php');
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
$bul1='"'.implode('","', $bul).'"';
$val1='"'.implode('","', $val).'"';
$tot1= array_sum($val);
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
                            <li class="breadcrumb-item active">Jumlah Stok Darah</li>
                        </ol>
                        </h1>
                        <div class="row">
                            

                            <div class="col-md-6 col-sm-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <?php
                                                                                ?>
                                    <div class="card-header">                                       
                                        <?php
                                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                                            echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                                            date_default_timezone_set('Asia/Jakarta');
                                            $jam=date("H:i:s");
                                            echo "| Pukul : <b>". $jam." "."</b>";
                                            $a = date ("H");
                                        ?>
                                    </div>
                                    <div class="card-body"><canvas id="DonorChart" width="100%" height="50"></canvas></div>
                                 </div>
                                </div>
                              </div>

                              <div class="col-md-6 col-sm-6  ">
                                <div class="x_panel">
                                    <div class="x_title">

                                    <div class="card-header">

                                        <?php
                                            echo "<b>"."Total Pendonor Perbulan Tahun ".date("Y")."</b>";
                                        ?>
                                    </div>
                                    <div class="card-body"><canvas id="DonorChart2" width="100%" height="50"></canvas></div>
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
        <script src="assets/demo/donor.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <script>
             // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';

            // Bar Chart Example
            var ctx = document.getElementById("DonorChart");
            var myLineChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["A", "B", "AB", "O"],
                datasets: [{
                  label: "Total",
                  backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                  borderColor: "rgba(2,117,216,1)",
                  data: [<?php echo $A->num_rows; ?>, <?php echo $B->num_rows; ?>, <?php echo $AB->num_rows; ?>, <?php echo $O->num_rows; ?>],
                }],
              },
              options: {
                scales: {
                  xAxes: [{
                    time: {
                      unit: 'month'
                    },
                    gridLines: {
                      display: false
                    },
                    ticks: {
                      maxTicksLimit: 6
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      min: 0,
                      max: <?php echo($A->num_rows + $B->num_rows + $AB->num_rows + $O->num_rows); ?>,
                      maxTicksLimit: 5
                    },
                    gridLines: {
                      display: true
                    }
                  }],
                },
                legend: {
                  display: false
                }
              }
            });


            var ctx = document.getElementById("DonorChart2");
            var myLineChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: [<?php echo $bul1; ?>],
                datasets: [{
                  label: "Total",
                  backgroundColor: 'rgba(173, 51, 51, 1)',
                  borderColor: "rgba(2,117,216,1)",
                  data: [<?php echo $val1; ?>],
                }],
              },
              options: {
                scales: {
                  xAxes: [{
                    time: {
                      unit: 'month'
                    },
                    gridLines: {
                      display: false
                    },
                    ticks: {
                      maxTicksLimit: 6
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      min: 0,
                      max: <?php echo $tot1; ?>,
                      maxTicksLimit: 5
                    },
                    gridLines: {
                      display: true
                    }
                  }],
                },
                legend: {
                  display: false
                }
              }
            });
        </script>

    </body>

<?php
}else echo "<h1>Please login first .</h1>";
?> 



</html>
