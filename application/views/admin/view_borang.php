<?php $this->load->view('admin/partials/admin_header.php'); ?>
<style>
.dataTables_filter{
	top: 0px !important;
	width: auto !important;
}
</style>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Senarai Borang</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <hr>
        <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Borang</h2>
                        <!--TUTUP SAT---<ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div style="padding-left: 25%">
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
                                    <th>Nama Kelompok</th>
                                    <th>Jumlah Pendeposit<br></th>
                                    <th>Tarikh Terima<br></th>
                                    <th>Tarihk Muat Naik<br></th>
                                    <th>Status Dokumen<br></th>
                                    <th>Jana Borang<br></th>
                                   
                                    
                                </tr>
                            </thead>
                           
                            <tbody>
            <?php
                if(isset($senarai_borang) && is_array($senarai_borang) && count($senarai_borang)): $i=1;
                foreach ($senarai_borang as $key => $data) { 
              ?>
              <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $data->nama_kelompok; ?></td>
                  <td><?php echo $data->jum_pendeposit; ?></td>
                  <td><?php echo $data->trkh_terima; ?></td>
                  <td><?php echo $data->trkh_muatnaik; ?></td>
                  <td></td>
                  <td>
					<select id="selBorang<?php echo $data->kod_kelompok;?>" onchange="JanaBorang('<?php echo $data->kod_kelompok;?>','<?php echo $data->nama_kelompok;?>')">
						<option>Pilih Borang / Surat</option>
						<option value="lhdn">Borang LHDN</option>
						<option value="praecipe">Borang Mahkamah - Praecipe</option>
						<option value="kuasa">Borang Mahkamah - Surat Kuasa Wakil</option>
						<!--<option value="inbois">Surat Depan Inbois TH</option>-->
						<option value="pendeposit">Surat Kepada Pendeposit</option>
					</select>
				  </td>
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
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col -->
        </div> <!-- /row --> 


    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer.php'); ?>

	<script src="<?php echo base_url("assets/bootstrap-datepicker.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/jszip/dist/jszip.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>
    
    <script>
      $(document).ready(function() {
		  $("#datatable-responsive").DataTable({
				"language": {
					"lengthMenu": "Papar _MENU_ rekod",
					"zeroRecords": "Tiada data dijumpai",
					"info": "Papar halaman _PAGE_ dari _PAGES_",
					"infoEmpty": "Tiada data",
					"infoFiltered": "(ditapis dari _MAX_ rekod)",
					"search": "Cari",
					"paginate": {
					  "previous": "Sebelumnya",
					  "next": "Seterusnya"
					}
				}
			});
      });
	  
	  function JanaBorang(kodkelompok,namakelompok){
		var sel = document.getElementById("selBorang"+kodkelompok);
		var jenisborang = sel.options[sel.selectedIndex].value;
		
		var datastr = '{"mode":"JanaBorang","JenisBorang":"'+jenisborang+'","KodKelompok":"'+kodkelompok+'","NamaKelompok":"'+namakelompok+'"}';
		$.ajax({
			url: "<?php echo base_url();?>Admin/Borang/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				window.open("<?php echo base_url();?>assets/tempBorang/"+data,"_blank");
				var datastr = '{"mode":"DeleteBorang","NamaBorang":"'+data+'"}';
				$.ajax({
					url: "<?php echo base_url();?>Admin/Borang/ajax",
					type: "POST",
					data: {"datastr":datastr}
				});
			}
		});		  
	  }
    </script>