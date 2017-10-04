<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Muat Naik Pukal</h3>
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
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
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