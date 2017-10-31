<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Senarai Kelompok</h3>

            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Senarai Kelompok</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">



   <?php
      if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>



    <form method="post" action="<?php echo base_url('Admin/Kelompok/update_data/'.$data['kod_kelompok'].''); ?>" >

        <h4><i class="fa fa-user"></i> Maklumat Kelompok</h4>
        <br>

         <label for="Nama Kelompok">Nama Kelompok</label>

        <input type="text" class="form-control" name="nama_kelompok" value="<?php echo $data['nama_kelompok']; ?>" required>
        <br>

         <label for="Jumlah Pendeposit">Jumlah Pendeposit</label>
        <input type="text" class="form-control" name="jum_pendeposit" value="<?php echo $data['jum_pendeposit']; ?>" required>
        <br>

         <label for="Tarikh Terima">Tarikh Terima</label>
        <input type="text" class="form-control" name="trkh_terima" value="<?php echo $data['trkh_terima']; ?>" required>
        <br>
        
         <label for="Tarikh Muatnaik">Tarikh Muatnaik</label>
        <input type="text" class="form-control" name="trkh_muatnaik" value="<?php echo $data['trkh_muatnaik']; ?>" required>
        <br>
        
         <label for="Status Kelompok">Status Kelompok</label>
        <input type="text" class="form-control" name="sts_kelompok" value="<?php echo $data['sts_kelompok']; ?>" required>
        <br>         
        
        
        <br>
        <div class="form-actions pull-right">
               <button type="submit" class="btn btn-primary btn-xs">Kemaskini</button>

              
               <a href="<?php echo base_url();?>index.php/admin/kelompok"><button type="submit" class="btn btn-danger btn-xs">Batal</button></a>
            </div>
            
           
                                        
       
        <br><br>
    </form>
                        <?php }endif; ?>
                        
                </div><!-- /x-panel --> 
               </div> <!-- /content --> 
        <div class="clearfix"></div>

        <hr>
        <!-- all models --> 
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Pendeposit</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div id="container" class="container">

<div class="row">

        <br><br>
		<!--<div style="display:inline">Sold Vehicle Filter</div>
			<div class="input-append date datepicker divDatePicker inline" id="datepicker" style="margin:0px;padding:0px;display:inline">
			<input type="text" class="datepicker input-small validation rightBorderNone otherTabs" id="fromDate" name="displayDate" placeholder="From Date" />
			<button class="btn leftBorderNone" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
			</div>
		<div class="input-append date datepicker divDatePicker inline" id="datepicker" style="margin:0px;padding:0px;padding-left:4px;;display:inline">
        <input type="text" placeholder="To Date" class="datepicker input-small validation rightBorderNone otherTabs" id="toDate" name="displayDate" />
        <button class="btn leftBorderNone" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
		</div>-->
		</div>
						
						
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pendeposit<br></th>
                                    <th>Nama Pendeposit<br></th>
                                   	<th>No Akaun TH</th>
                                    <th>No Aqad</th>
                                    <th>Status Dokumen</th>
                                    <th>Tindakan</th>
									
                                    
                                </tr>
                            </thead>
                           
                            <tbody>
            <?php
                if(isset($senarai_pendeposit) && is_array($senarai_pendeposit) && count($senarai_pendeposit)): $i=1;
                foreach ($senarai_pendeposit as $key => $data) { 
              ?>
              <tr <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $data['id_pendeposit']; ?></td>
                  <td><?php echo $data['nama_pendeposit']; ?></td>
                  <td><?php echo $data['no_TH']; ?></td>
                  <td><?php echo $data['no_aqad']; ?></td>
                  <td><?php echo $data['nama_sts']; ?></td>
                    
                  <td><a href="#" onclick="popupClick(<?php echo $data['id'];?>);" class="btn btn-primary btn-xs">Kemaskini</a>           
                <a href="<?php echo site_url('Admin/Kelompok/view_imbasan/'. $data['id'].''); ?>" class="btn btn-danger btn-xs">Papar Borang</a></td>
              </tr>
                <?php
                    $i++;
                      }
                  else:
                ?>
              <tr>
                    <td colspan="7" align="center" >Tiada Maklumat</td>
                </tr>
                <?php
                endif;
              ?>
          </tbody>
                        </table>        
            </div> <!-- /col --> 


                    
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
<script>
function popupClick(id){
	var child = window.open("<?php echo site_url('Admin/Pendeposit/popup/'); ?>"+id, "newwindow", "width=1200,height=600");
	$(child).unload(function(){
		window.location.reload();
	});
}
</script>

<?php $this->load->view('admin/partials/admin_footer.php'); ?>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Success",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>