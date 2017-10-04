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
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cipta Inbois Baru</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Keterangan Inbois</h2>
                        <!--<ul class="nav navbar-left panel_toolbox">
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
						    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <label></label>
                        <form method="post" action="<?php echo base_url();?>Admin/Invoice/jana_invoice">
                            <fieldset>
								<!--<h2>Keterangan Inbois</h2>-->
                                <div class="form-group">
                                    No. Inbois : <input class="form-control" placeholder="No. Inbois" name="no_inbois" type="text" value="<?php echo $InboisNo;?>" readonly required>
                                </div>
                                <div class="form-group">
                                    Tarikh : <input class="form-control" placeholder="Tarikh" name="tarikh" type="text" value="" required>
                                </div>
                                <div class="form-group">
                                    No. Kelompok : 
									<select name="no_kelompok" class="form-control" onchange="KelompokChange();" required>
										<option value="">Sila Pilih...</option>
										<?php foreach($KelompokList as $eachKelompok):?>
										<option value="<?php echo $eachKelompok->kod_kelompok;?>"><?php echo $eachKelompok->nama_kelompok;?></option>
										<?php endforeach;?>
									</select>
                                </div>
                                <div class="form-group">
                                    Jumlah Dokumen : <input class="form-control" placeholder="Jumlah Dokumen" name="jumlah_dokumen" type="number" onkeyup="calculateClaim();" value="" readonly required>
                                </div>
								<br/>
								
								<h2>Keterangan Fii</h2>
								<table id="tblTuntutan">
									<tr style="background:#2A3F54;color:white;font-weight:bold;text-align:center;">
										<td style="vertical-align:top;">#</td>
										<td style="vertical-align:top;">KETERANGAN</td>
										<td style="vertical-align:top;">HARGA PER/UNIT (RM)</td>
										<td style="vertical-align:top;">JUMLAH DOKUMEN</td>
										<td style="vertical-align:top;">AMAUN (RM)</td>
									</tr>
									<tr>
										<td style="text-align:center;">1</td>
										<td colspan="4">FII (termasuk GST)</td>
									</tr>
									<tr>
										<td></td>
										<td>1.1 Fii Perkhidmatan</td>
										<td style="text-align:right;">35.00</td>
										<td><input class="form-control" placeholder="Services Fees (Unit)" name="services_fees" type="number" value="" onkeyup="calculateClaim();" readonly required></td>
										<td class="tdsf"></td>
									</tr>
									<tr>
										<td></td>
										<td>1.2 GST 6%</td>
										<td style="text-align:right;">2.10</td>
										<td><input class="form-control" placeholder="GST 6% (Unit)" name="gst" type="number" value="" onkeyup="calculateClaim();" readonly required></td>
										<td class="tdgst"></td>
									</tr>
									<tr>
										<td style="text-align:center;">2</td>
										<td><i>Disbursement</i></td>
										<td style="text-align:right;">140.00</td>
										<td><input class="form-control" placeholder="Disbursement (Unit)" name="disbursement" type="number" onkeyup="calculateClaim();" value="" readonly required></td>
										<td class="tdd"></td>
									</tr>
									<tr>
										<td colspan="4" style="font-weight:bold;text-align:right;">JUMLAH TUNTUTAN</td>
										<td class="tdtc"></td>
									</tr>
								</table>
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
	function calculateClaim(){
		var jd = $("input[name=jumlah_dokumen]").val().replace(",","");
		
		//var sf = $("input[name=services_fees]").val().replace(",","");
		//var gst = $("input[name=gst]").val().replace(",","");
		//var dis = $("input[name=disbursement]").val().replace(",","");
		$("input[name=services_fees]").val(jd);
		$("input[name=gst]").val(jd);
		$("input[name=disbursement]").val(jd);
		var sf = jd;
		var gst = jd;
		var dis = jd;
		
		var TotalSF = parseFloat(35 * sf);
		var TotalGST = parseFloat(2.1 * gst);
		var TotalDisbursement = parseFloat(140 * dis);
		
		var TotalClaim = TotalSF + TotalGST + TotalDisbursement;
		
		$(".tdsf").text(format(TotalSF,".",2));
		$(".tdgst").text(format(TotalGST,".",2));
		$(".tdd").text(format(TotalDisbursement,".",2));
		
		$(".tdtc").text(format(TotalClaim,".",2));
	}
	function format(n, sep, decimals) {
		sep = sep || "."; // Default to period as decimal separator
		decimals = decimals || 2; // Default to 2 decimals

		return n.toLocaleString().split(sep)[0]
			+ sep
			+ n.toFixed(decimals).split(sep)[1];
	}
	function KelompokChange(){
		var kod_kelompok = $("select[name=no_kelompok]").val();
		alert(kod_kelompok);
		
		var datastr = '{"mode":"GetJumlahPeserta","kod_kelompok":"'+kod_kelompok+'"}';
		$.ajax({
			url: "<?php echo base_url();?>Invoice/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				$("input[name=jumlah_dokumen]").val(data);
				calculateClaim();
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