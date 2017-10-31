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
                        <h2>Kemaskini Senarai Pendeposit</h2>
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
   <?php
      if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>

    <form method="post" action="<?php echo base_url('Admin/Pendeposit/update_data/'.$data['id'].''); ?>" >

        <label for="Name">No Inbois</label>
        <input type="text" class="form-control" name="no_inbois" value="<?php echo $data['no_inbois']; ?>" required >
        <br>
        
        <label for="Nama Sijil">ID Pendeposit</label>
        <input type="text" class="form-control" name="id_pendeposit" value="<?php echo $data['id_pendeposit']; ?>" required>
        <br>
        
        <label for="Nama Sijil">Nama Pendeposit</label>
        <input type="text" class="form-control" name="nama_pendeposit" value="<?php echo $data['nama_pendeposit']; ?>" required>
        <br>
        
        <label for="Nama Sijil">No Akaun TH</label>
        <input type="text" class="form-control" name="no_TH" value="<?php echo $data['no_TH']; ?>" required>
        <br>
        
        <label for="Nama Sijil">No Aqad</label>
        <input type="text" class="form-control" name="no_aqad" value="<?php echo $data['no_aqad']; ?>" required>
        <br>
        
        <label for="Nama Sijil">No MyKad</label>
        <input type="text" class="form-control" name="no_mykad" value="<?php echo $data['no_mykad']; ?>" required>
        <br>        

        <label for="Nama Sijil">Alamat 1</label>
        <input type="text" class="form-control" name="alamat1" value="<?php echo $data['alamat1']; ?>" required>
        <br>

        <label for="Nama Sijil">Alamat 2</label>
        <input type="text" class="form-control" name="alamat2" value="<?php echo $data['alamat2']; ?>" required>
        <br>

        <label for="Nama Sijil">Bandar</label>
        <input type="text" class="form-control" name="bandar" value="<?php echo $data['bandar']; ?>" required>
        <br>

        <label for="Nama Sijil">Poskod</label>
        <input type="text" class="form-control" name="poskod" value="<?php echo $data['poskod']; ?>" required>
        <br>

        <label for="Nama Sijil">Negeri</label>
        <input type="text" class="form-control" name="kod_negeri" value="<?php echo $data['kod_negeri']; ?>" required>
        <br>

        <label for="Nama Sijil">No Tel Rumah</label>
        <input type="text" class="form-control" name="no_tel_rumah" value="<?php echo $data['no_tel_rumah']; ?>" required>
        <br>

        <label for="Nama Sijil">No Tel Bimbit</label>
        <input type="text" class="form-control" name="no_tel_bimbit" value="<?php echo $data['no_tel_bimbit']; ?>" required>
        <br>

        <label for="Nama Sijil">Nama Kelompok</label>
        <input type="text" class="form-control" name="kod_kelompok value="<?php echo $data['kod_kelompok']; ?>" required>
        <br>
      
        <label for="Status Dokumen">Status Dokumen</label>
        <select class="form-control" name="status" >
                                <option value="1" <?php if($data['status'] == 1):echo 'selected';endif;?>>BARU</option>
                                <option value="2" <?php if($data['status'] == 2):echo 'selected';endif;?>>PENYETEMAN DI LHDN</option>
                                <option value="3" <?php if($data['status'] == 3):echo 'selected';endif;?>>PENFAILAN DI MAHKAMAH</option>
                                   <option value="4" <?php if($data['status'] == 3):echo 'selected';endif;?>>PENFAILAN DI MAHKAMAH</option>
                                      <option value="5" <?php if($data['status'] == 3):echo 'selected';endif;?>>IMBASAN DOKUMEN</option>
                                      <option value="6" <?php if($data['status'] == 3):echo 'selected';endif;?>>SELESAI</option>
                                      
                            </select>
        <br>
        
        <br>
        <div class="form-actions pull-right">
               <button type="submit" class="btn btn-primary">Kemaskini</button>
              
               <a href="<?php echo base_url();?>index.php/admin/pendeposit"><button type="submit" class="btn btn-danger">Batal</button></a>
            </div>
            
           
                                        
       
        <br><br>
    </form>
   <?php
        }endif;
     ?>
    <br><br>

<?php $this->load->view('admin/partials/admin_footer'); ?>