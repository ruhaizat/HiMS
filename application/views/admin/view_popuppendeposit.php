<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imarah Hibah</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<!--date picker -->
	<link href="<?php echo base_url("assets/datepicker3.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- sweet-alert --> 
    <link href="<?php echo base_url("assets/vendors/sweetalert/sweetalert.css"); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/build/css/custom.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/build/css/matrix-media.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/build/css/matrix-style.css"); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
<!-- page content -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Pendeposit</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <!--<<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>-->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center"></h2>
        <br><br>
    <form method="post" action="<?php echo base_url('Admin/Pendeposit/update_popup/'.$edit_data->id.''); ?>" enctype="multipart/form-data" >

        <label for="Nama Sijil">ID Pendeposit</label>
        <input type="text" class="form-control" name="id_pendeposit" value="<?php echo $edit_data->id_pendeposit; ?>" required>
        <br>
        
        <label for="Nama Sijil">Nama Pendeposit</label>
        <input type="text" class="form-control" name="nama_pendeposit" value="<?php echo $edit_data->nama_pendeposit; ?>" required>
        <br>

        <label for="Alamat">Alamat Pendeposit</label>
        <input type="text" class="form-control" name="alamat1" value="<?php echo $edit_data->alamat1; ?>" required>
        <br>

        <label for="Poskod">Poskod</label>
        <input type="text" class="form-control" name="poskod" value="<?php echo $edit_data->poskod; ?>" required>
        <br>

        <label for="Bandar">Bandar</label>
        <input type="text" class="form-control" name="bandar" value="<?php echo $edit_data->bandar; ?>" required>
        <br>

        <label for="Negeri">Negeri</label>
        <input type="text" class="form-control" name="kod_negeri" value="<?php echo $edit_data->kod_negeri; ?>" required>
        <br>
        
        <label for="Nama Sijil">No Akaun TH</label>
        <input type="text" class="form-control" name="no_TH" value="<?php echo $edit_data->no_TH; ?>" required>
        <br>
        
        <label for="Nama Sijil">No Aqad</label>
        <input type="text" class="form-control" name="no_aqad" value="<?php echo $edit_data->no_aqad; ?>" required>
        <br>
        
        <label for="Nama Sijil">Muat Naik Fail</label>
		<?php if($edit_data->fail1):?>
		<br/>
		Fail 1: <a target="_blank" href="<?php echo base_url();?>assets/failPendeposit/<?php echo $edit_data->fail1;?>"><?php echo $edit_data->fail1;?></a>
		<?php else:?>
        <input type="file" class="form-control" name="file1" required>
		<?php endif;?>
		<br/>
		<?php if($edit_data->fail2):?>
		Fail 2: <?php echo $edit_data->fail2;?>
		<?php else:?>
        <input type="file" class="form-control" name="file2" required>
		<?php endif;?>
        <br>
        <br>
        
        <br>
        <div class="form-actions pull-right">
               <button type="submit" class="btn btn-primary btn-xs">Kemaskini</button>
              
               <a href="<?php echo base_url();?>index.php/admin/pendeposit"><button type="submit" class="btn btn-danger btn-xs">Batal</button></a>
            </div>
            
           
                                        
       
        <br><br>
    </form>
    <br><br>
        <!-- footer content -->
       
     
        <!-- /footer content -->
      </div>

    </div>
      
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url("assets/vendors/bootstrap/dist/js/bootstrap.min.js"); ?> "></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- sweetalert --> 
    <script src="<?php echo base_url('assets/vendors/sweetalert/sweetalert.min.js'); ?>"></script>
    
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.js'); ?>"> </script>
    <!-- Date Picker -->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"> </script>
  </body>
</html>
