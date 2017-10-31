<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cipta Kelompok Baru</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Muat Naik Pukal</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <label></label>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Admin/Document/muatnaik_pukal">
                            <fieldset>
                                <div class="form-group">
                                    Pilih dokumen (format .CSV sahaja) : <input name="file" type="file">
                                </div>
                                <br/>
                                <input type="submit" name="buttonProses" value="Muat Naik" />
                            </fieldset>
							<?php if ($upload_error): ?>
								<p class="notice">Fail tidak sah [Error Message: <?php echo $upload_error_message;?>]</p>
							<?php endif; ?>
							<?php if ($upload_ok): ?>
								<p class="notice">
									<?php echo number_format($total_updates); ?> Muat naik tidak berjaya! Rekod Pendeposit telah wujud di dalam sistem. <?php echo number_format($total_new); ?> Muat naik berjaya. 
								</p>
							<?php endif; ?>
                        </form>
                </div><!-- /x-panel --> 
               </div> <!-- /content --> 
        <div class="clearfix"></div>

        <hr>
        <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Pendeposit</h2>
                        <!--TUTUP SAT---<ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div style="padding-left: 25%">

		</div>
						
						
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>No. Inbois</th>
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
                if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
                foreach ($view_data as $key => $data) { 
              ?>
              <tr <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $data['no_inbois']; ?></td>
                  <td><?php echo $data['id_pendeposit']; ?></td>
                  <td><?php echo $data['nama_pendeposit']; ?></td>
                  <td><?php echo $data['no_TH']; ?></td>
                  <td><?php echo $data['no_aqad']; ?></td>
                  <td><?php echo $data['nama_sts']; ?></td>
                    
                  <td><a href="<?php echo site_url('Admin/Pendeposit/edit_data/'. $data['id'].''); ?>" class="btn btn-primary btn-xs">Kemaskini</a>           
                <a href="<?php echo site_url('Admin/Pendeposit/view_imbasan/'. $data['id'].''); ?>" class="btn btn-danger btn-xs">Imbasan</a></td>
              </tr>
                <?php
                    $i++;
                      }
                  else:
                ?>
              <tr>
                    <td colspan="8" align="center" >Tiada Maklumat</td>
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

<?php $this->load->view('admin/partials/admin_footer'); ?>

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