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
                <h3>Senarai Kelompok</h3>
            </div>
        </div>
         <div class="clearfix"></div>

        <hr>
        <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Senarai Kelompok</h2>
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
						
						
						<table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelompok</th>
                                    <th>Rujukan TH</th>                                     
                                    <th>Jumlah Pendeposit</th>
                                    <th>Tarikh Terima</th>
                                    <th>Tarikh Muatnaik</th>
                                    <th>Status Kelompok</th>
                                    <th>Tindakan</th>
									
                                    
                                </tr>
                            </thead>
                           
                            <tbody>
            <?php
                if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
                foreach ($view_data as $key => $data) { 
              ?>
              <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                 <!-- <td><?php echo $i; ?></td>-->
                  <td><?php echo $data['kod_kelompok']; ?></td>
                  <td><?php echo $data['nama_kelompok']; ?></td>
                  <td><?php echo $data['rujukan_TH']; ?></td>                  
                  <td><?php echo $data['jum_pendeposit']; ?></td>
                  <td><?php echo $data['trkh_terima']; ?></td>
                  <td><?php echo $data['trkh_muatnaik']; ?></td>
                  <td><?php echo $data['sts_kelompok']; ?></td>
                
                    
                  <td><a href="<?php echo site_url('Admin/Kelompok/edit_data/'. $data['kod_kelompok'].''); ?>" class="btn btn-primary btn-xs">Kemaskini</a>
                  <a href="<?php echo site_url('Admin/Kelompok/download_data/'. $data['kod_kelompok'].''); ?>" class="btn btn-primary btn-xs">Muat Turun</a>
                  <a href="<?php echo site_url('Admin/Kelompok/delete_data/'. $data['kod_kelompok'].''); ?>" class="btn btn-danger btn-xs">Hapus</a></td>
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
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col -->
        </div> <!-- /row --> 


    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer.php'); ?>



<!--<?php if($this->session->flashdata('message') != NULL) : ?>
    <script>
        swal({
          title: "Success",
          text: "<?php echo $this->session->flashdata('message'); ?>",
          type: "success",
          timer: 1500,
          showConfirmButton: false
        });
    </script>
<?php endif ?>-->
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
//        var handleDataTableButtons = function() {
//          if ($("#datatable-responsive").length) {
//            $("#datatable-responsive").DataTable({
//            aaSorting: [[0, 'asc']],
//            
//              dom: "Blfrtip",
//             /* buttons: [
//                {
//                  extend: "copy",
//                  className: "btn-sm",
//				  exportOptions: {
//                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
//                }
//                },
//                {
//                  extend: "csv",
//                  className: "btn-sm",
//				  exportOptions: {
//                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
//                }
//                },
//                {
//                  extend: "excel",
//                  className: "btn-sm",
//				  exportOptions: {
//                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
//                }
//                },
//                {
//                  extend: "pdf",
//                  className: "btn-sm",
//				  exportOptions: {
//                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
//                }
//                },
//                {
//                  extend: "print",
//                  className: "btn-sm",
//				  exportOptions: {
//                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
//                }
//                },
//              ],*/
//              responsive: true,
//            });
//          }
//		  else{
//		  
//		    $(document).ready(function() {
//    $('#datatable-responsive').DataTable( {
//        initComplete: function () {
//            this.api().columns([2,3]).every( function () {
//                var column = this;
//                var select = $('<select><option value=""></option></select>')
//                    .appendTo( $(column.header()) )
//                    .on( 'change', function () {
//                        var val = $.fn.dataTable.util.escapeRegex(
//                            $(this).val()
//                        );
// 
//                        column
//                            .search( val ? '^'+val+'$' : '', true, false )
//                            .draw();
//                    } );
// 
//                column.data().unique().sort().each( function ( d, j ) {
//    if(column.search() === '^'+d+'$'){
//        select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
//    } else {
//        select.append( '<option value="'+d+'">'+d+'</option>' )
//    }
//} );
//            } );
//        }
//    } );
//} );
//		  
//		  }
//		  
//		  
//        };
//
//        TableManageButtons = function() {
//          "use strict";
//          return {
//          
//            init: function() {
//              handleDataTableButtons();
//            }
//          };
//        }();    
//                    
//        TableManageButtons.init();
      });
   
       


//$(function () {
//    $("div .divDatePicker").each(function () {
//        $(this).datepicker().on('changeDate', function (ev) {
//            $(this).datepicker("hide");
//        });
//    });
//    $(document).on('change', '#fromDate, #toDate', function () {
//        $('#datatable-responsive').dataTable().DataTable().draw();
//    });
//
//});
//
//$.fn.dataTableExt.afnFiltering.push(
//
//function (oSettings, aData, iDataIndex) {
//    if (($('#fromDate').length > 0 && $('#fromDate').val() !== '') || ($('#toDate').length > 0 && $('#toDate').val() !== '')) {
//        var today = new Date();
//        var dd = today.getDate();
//        var mm = today.getMonth();
//        var yyyy = today.getFullYear();
//console.log(today+"-- "+dd+" --"+mm+" --"+yyyy);
//        if (dd < 10) dd = '0' + dd;
//
//        if (mm < 10) mm = '0' + mm;
//
//        today = mm + '/' + dd + '/' + yyyy;
//        var minVal = $('#fromDate').val();
//        var maxVal = $('#toDate').val();
//        //alert(minVal+"   ----   "+maxVal);
//        if (minVal !== '' || maxVal !== '') {
//            var iMin_temp = minVal;
//            if (iMin_temp === '') {
//                iMin_temp = '01/01/1980';
//            }
//
//            var iMax_temp = maxVal;
//            var arr_min = iMin_temp.split("/");
//
//            var arr_date = aData[5].split("/");
////console.log(arr_min[2]+"-- "+arr_min[0]+" --"+arr_min[1]);
//             var iMin = new Date(arr_min[2], arr_min[0]-1, arr_min[1]);
//          //  console.log(iMin);
//           // console.log(" --"+yyy);
//           
//
//            var iMax = '';
//            if (iMax_temp != '') {
//                var arr_max = iMax_temp.split("/");
//                iMax = new Date(arr_max[2], arr_max[0]-1, arr_max[1], 0, 0, 0, 0);
//            }
//
//
//
//
//            var iDate = new Date(arr_date[2], arr_date[0]-1, arr_date[1], 0, 0, 0, 0);
//            //alert(iMin+" -- "+iMax);
//      //  console.log("Test data "+iMin+" -- "+iMax+"-- "+iDate+" --"+(iMin <= iDate && iDate <= iMax));
//            if (iMin === "" && iMax === "") {
//                return true;
//            } else if (iMin === "" && iDate < iMax) {
//                // alert("inside max values"+iDate);
//                return true;
//            } else if (iMax === "" && iDate >= iMin) {
//                // alert("inside max value is null"+iDate);                    
//                return true;
//            } else if (iMin <= iDate && iDate <= iMax) {
//              //  alert("inside both values"+iDate);
//                return true;
//            }
//            return false;
//        }
//    }
//    return true;
//});
         </script>


		 <!--<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Success",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>-->