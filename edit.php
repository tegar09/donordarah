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
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>


        <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
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
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
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
                            <div class="sb-sidenav-menu-heading">Cores</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="table.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pendaftaran
                            </a>
                            <a class="nav-link" href="charts.html">
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
                
                <!-- <main> -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
      
                          <div class="x_title">
                                    <h2>Data Calon Pendonor</h2>
                                    <div class="clearfix"></div>
                                </div>
                                    
                                    <?php include('select2.php');?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="edit2.php" method="post">
                                        <?php
                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {                                              
                                        ?>

                                        <input type="hidden" id="first-name" name="nodaftar" class="form-control " value="<?php echo $row["nodaftar"] ;?>">


                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No KTP atau SIM<span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" id="first-name" name="sim" required="required" class="form-control " value="<?php echo $row["noktpsim"];?>">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap<span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" id="first-name" name="nmlengkap" required="required" class="form-control" value="<?php echo $row["nmlengkap"] ;?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir<span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input id="birthday" class="date-picker form-control" name="tgllahir" placeholder="bln-hari-thn" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="<?php echo $row["tgllahir"] ;?>">
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = 'text';
                                                        }, 60000);
                                                    }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Usia<span class="required">*</span>
                                            </label>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" id="last-name" name="usia" required="required" class="form-control" value="<?php echo $row["usia"] ;?>">
                                            </div>
                                        </div>
                                            
                                        <div>                                       
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                                        <p>
                                            Pria
                                            <input type="radio" class="flat" name="jk" id="genderL" value="L" checked="" required value="<?php echo $row["jk"] ;?>"/> 
                                            Wanita
                                            <input type="radio" class="flat" name="jk" id="genderP" value="P" value="<?php echo $row["jk"] ;?>"/>
                                        </p>
                                        </div>
                                        <div class="item form-group">
                                            <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <input id="middle-name" class="form-control" type="text" name="alamat" value="<?php echo $row["alamat"] ;?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input id="middle-name" class="form-control" type="text" name="notelp" value="<?php echo $row["notelp"] ;?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Donor Terakhir<span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input id="birthday" class="date-picker form-control" name="dnrterakhir" placeholder="bln-hari-thn" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="<?php echo $row["dnrterakhir"] ;?>"/>
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = 'text';
                                                        }, 60000);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
                                            <div class="col-md-1 col-sm-1">
                                                <select class="select2_single form-control" name="goldar" tabindex="-1" value="<?php echo $row["goldar"] ;?>"/>
                                                    <option></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="AB">AB</option>
                                                    <option value="O">O</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                            <input type="hidden" name="noktpsim" value="<?php echo $row["noktpsim"] ;?>">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>

                    <?php
                            }
                            } else {
                            echo "0 result";
                            }                   
                            ?>

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

        <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
    </body>

<?php
}else echo "<h1>Please login first .</h1>";
?> 

</html>

