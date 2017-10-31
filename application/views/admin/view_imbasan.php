<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pendeposit</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Papar Imbasan Pendeposit</h2>
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
      if(isset($view_imbasan) && is_array($view_imbasan) && count($view_imbasan)): $i=1;
      foreach ($view_imbasan as $key => $data) { 
    ?>

    <form method="post" action="<?php echo site_url('Admin/Pendeposit/view_imbasan/'.$data['id'].''); ?>" >

        <label for="Name">Nama Pendeposit</label>
        <input type="text" class="form-control" name="nama_pendeposit" value="<?php echo $data['nama_pendeposit']; ?>" required >
        <br>
        <label for="Jenis Dokumen">Jenis Dokumen</label>
        <select class="form-control" >
                                <option value="1">SURAT IKATAN HIBAH</option>
                                <option value="2">SURAT KUASA WAKIL</option>
                            </select>
        <br>
        <div class="form-actions pull-right">
               <a href="http://hims.hibah.com.my/dokumenimbasan/mat%20zali_suratikatanhi_20171004121650.pdf" class="btn btn-primary">Papar</a>
               <!--<a href="<?php echo base_url();?>index.php/admin/pendeposit"><button type="submit" class="btn btn-danger">Batal</button></a>-->
            </div>
            
           
                                        
       
        <br><br>
    </form>
   <?php
        }endif;
     ?>
    <br><br>

<?php $this->load->view('admin/partials/admin_footer'); ?>