<?php $this->load->view('admin/partials/admin_header.php'); ?>
<style>
#tblTuntutan{
	border-collapse: collapse;
	width: 100%;
	font-family: 'Open Sans', sans-serif;
    font-size: 12px;
}#tblTuntutan td{
	border: 1px solid black;
	padding: 10px;
}
</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Jana Borang Baru</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Keterangan Borang</h2>
                        <!--<ul class="nav navbar-left panel_toolbox">
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
						    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <label></label>
                        <form method="post" action="<?php echo base_url();?>Admin/borang/jana_borang">
                            <fieldset>
								<!--<h2>Keterangan Inbois</h2>-->
                                <div class="form-group">
                                    Nama Kelompok : <br/>
									<select class="form-control" id="no_kelompok" name="no_kelompok" onchange="KelompokChange();" required style="width:100%;height:34px;">
										<option value="">Pilih Nama Kelompok</option>
										<?php foreach($KelompokList as $eachKelompok):?>
										<option value="<?php echo $eachKelompok->kod_kelompok;?>"><?php echo $eachKelompok->nama_kelompok;?></option>
										<?php endforeach;?>
									</select>
                                </div>
                                <div class="form-group">
                                    Jumlah Pendeposit : <input class="form-control" name="jumlah_pendeposit" type="text" readonly required>
                                </div>
                                <div class="form-group">
                                    Tarikh Jana : <input class="form-control" name="tarikh_jana" type="text" required>
                                </div>
                                <div class="form-group">
                                    Jenis Borang : <br/>
									<select id="jenis_borang" name="jenis_borang" required style="width:100%;height:34px;">
										<option value="">Pilih Jenis Borang</option>
										<?php foreach($BorangList as $eachBorang):?>
										<option value="<?php echo $eachBorang->kod_jenisborang;?>"><?php echo $eachBorang->nama_borang;?></option>
										<?php endforeach;?>
									</select>
                                </div>
                                <br/>
                                <input type="submit" name="buttonDownload" value="Jana & Papar" />
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
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script>
	$( document ).ready(function() {
		$("input[name=tarikh_jana]").datepicker({
			"format": "dd/mm/yyyy"
		});
		$("select[name=no_kelompok]").select2();
	});		
	function KelompokChange(){
		var kod_kelompok = $("#no_kelompok").val();
		
		var datastr = '{"mode":"GetJumlahPendeposit","kod_kelompok":"'+kod_kelompok+'"}';
		$.ajax({
			url: "<?php echo base_url();?>Admin/Invoice/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				$("input[name=jumlah_pendeposit]").val(data);
			}
		});
	}
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