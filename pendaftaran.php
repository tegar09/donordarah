<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formulir Pendaftaran Donor</title>

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

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <br/>
        </div>
      </div>


      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>FORMULIR PENDAFTARAN</h3>
            </div>
          </div>
          
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Calon Pendonor</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <br/>

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="insert.php" method="post"> 

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No KTP atau SIM<span class="required">*</span>
                      </label>
                        <div class="col-md-2 col-sm-2  form-group">
                        <input type="text" name="noktpsim" class="form-control">
                        </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap<span class="required">*</span>
                      </label>
                      <div class="col-md-5 col-sm-5 ">
                        <input type="text" id="first-name" name="nmlengkap" required="required" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 ">
                        <input id="birthday" class="date-picker form-control" name="tgllahir" placeholder="bln-hari-thn" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Usia<span class="required">*</span>
                      </label>
                      <div class="col-md-2 col-sm-2 ">
                        <input type="text" id="last-name" name="usia" required="required" class="form-control">
                      </div>
                    </div>

                    <div>                   
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                    <p>
                      Pria
                      <input type="radio" class="flat" name="jk" id="genderL" value="L" checked="" required /> 
                      Wanita
                      <input type="radio" class="flat" name="jk" id="genderP" value="P" /></p>
                    </div>

                    <div class="item form-group">
                      <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                      <div class="col-md-7 col-sm-7 ">
                        <input id="middle-name" class="form-control" type="text" name="alamat">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="notelp" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
                      <div class="col-md-2 col-sm-2 ">
                        <input id="middle-name" class="form-control" type="text" name="notelp">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Donor Terakhir<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 ">
                        <input id="birthday" class="date-picker form-control" name="dnrterakhir" placeholder="bln-hari-thn" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                    <label for="goldar" class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
                      <div class="col-md-1 col-sm-1">
                        <select class="select2_single form-control" name="goldar" tabindex="-1">
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
                        <button class="btn btn-primary" type="button">Batal</button>
                        <button class="btn btn-primary" type="reset">Hapus</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>
        </div>
    </div>
</div>
            




  

  

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


</div>
</div>
</body>
