<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Senarai Invoice</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Senarai Invoice</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center"></h2>
        <br><br>
   <?php
      if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>

    <form method="post" action="<?php echo base_url('Admin/Invoice/update_data/'.$data['id'].''); ?>" >

        <label for="Name">Masukkan Kod Inbois</label>
        <input type="text" class="form-control" name="kod_inbois" value="<?php echo $data['kod_inbois']; ?>" required >
        <br>
        

        
         <label for="Nama Sijil">Masukkan No. Inbois</label>
        <input type="text" class="form-control" name="no_inbois" value="<?php echo $data['no_inbois']; ?>" required>
        <br>
        
         <label for="Nama Sijil">Masukkan Tarkh Inbois</label>
        <input type="text" class="form-control" name="tarikh" value="<?php echo $data['tarikh']; ?>" required>
        <br>
        
         <label for="Nama Sijil">Masukkan No. Kelompok</label>
        <input type="text" class="form-control" name="no_kelompok" value="<?php echo $data['no_kelompok']; ?>" required>
        <br>
        
        
        
        
        <br>
        <div class="form-actions pull-right">
               <button type="submit" class="btn btn-primary">Kemaskini</button>
              
               <a href="<?php echo base_url();?>index.php/admin/invoice"><button type="submit" class="btn btn-danger">Batal</button></a>
            </div>
            
           
                                        
       
        <br><br>
    </form>
   <?php
        }endif;
     ?>
    <br><br>

<?php $this->load->view('admin/partials/admin_footer'); ?>