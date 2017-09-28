<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Inbois</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cipta Inbois Baru</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <label></label>
                        <form method="post" action="<?php echo base_url();?>Admin/Invoice/jana_invoice">
                            <fieldset>
                                <div class="form-group">
                                    Tarikh : <input class="form-control" placeholder="Tarikh" name="tarikh" type="text" value="" required>
                                </div>
                                <div class="form-group">
                                    No. Kelompok : <input class="form-control" placeholder="No. Kelompok" name="no_kelompok" type="text" value="" required>
                                </div>
                                <div class="form-group">
                                    No. Inbois : <input class="form-control" placeholder="No. Inbois" name="no_inbois" type="text" value="" required>
                                </div>
                                <div class="form-group">
                                    Services Fees (Unit) : <input class="form-control" placeholder="Services Fees (Unit)" name="services_fees" type="number" value="" required>
                                </div>
                                <div class="form-group">
                                    GST 6% (Unit) : <input class="form-control" placeholder="GST 6% (Unit)" name="gst" type="number" value="" required>
                                </div>
                                <div class="form-group">
                                    Disbursement (Unit) : <input class="form-control" placeholder="Disbursement (Unit)" name="disbursement" type="number" value="" required>
                                </div>
                                <br/>
                                <input type="submit" name="buttonDownload" value="Simpan & Muat Turun" />
                                <input type="submit" name="buttonPrint" value="Simpan & Cetak" />
                            </fieldset>
                        </form>
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col --> 
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>
<script>
	$( document ).ready(function() {
		$("input[name=tarikh]").datepicker({
			"format": "dd/mm/yyyy"
		});
	});
</script>
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