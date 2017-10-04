<?php $this->load->view('admin/partials/admin_header.php'); ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Senarai Pengguna</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <!--<div class="widget-title">
                            <h5>Senarai Pengguna</h5>-->
                        </div>

          <h4>Carian Pengguna</h4>

                         <h4>Senarai Pengguna</h4>
                           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    ID Pengguna
                                </th>
                                <th>
                                   Nama Pengguna
                                </th>
                                <th>
                                    Emel
                                </th>
                                <th>
                                    No Telefon Bimbit
                                </th>
                                <th>
                                    Organisasi
                                </th>
                                 <th>
                                    Status Pengguna
                                </th>
                                <th colspan="2">
                                    Tindakan
                                </th>
                            </tr>
                            
                            {emp}
                            <tr>
                                <td>{id}</td>
                                <td>{id_pengguna}</td>
                                <td>{nama_pengguna}<br>
                                <td>{emel}</td>
                                <td>{no_tel_bimbit}</td>
                                <td>{kod_organisasi}</td>
                                <td>{kod_sts_pengguna}</td>
                                <td>
                                    <a href=" <?php echo base_url(); ?>admin/pengguna/edit/{id}" class="btn btn-primary btn-xs">Kemaskini</a>
                                    <!--<a onclick="return confirm('All records will be deleted, continue?')" href=" <?php echo base_url(); ?>admin/employee/delete/{id}" class="btn btn-danger btn-xs">Hapus</a>-->
                                </td>
                            </tr>
                            {/emp}
                        </table>
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
    <script src="<?php echo base_url("asset/js/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/jquery.ui.custom.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/js/jquery.uniform.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/select2.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/matrix.js"); ?>"></script>
    <script src="<?php echo base_url("asset/js/matrix.tables.js"); ?>"></script>
    
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-responsive").length) {
            $("#datatable-responsive").DataTable({
            aaSorting: [[0, 'desc']],
            
              dom: "Blfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm",
                  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
                },
                {
                  extend: "csv",
                  className: "btn-sm",
                  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
                },
                {
                  extend: "excel",
                  className: "btn-sm",
                  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
                },
                {
                  extend: "pdf",
                  className: "btn-sm",
                  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
                },
                {
                  extend: "print",
                  className: "btn-sm",
                  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
                },
              ],
              responsive: true,
            });
          }
          else{
          
            $(document).ready(function() {
    $('#datatable-responsive').DataTable( {
        initComplete: function () {
            this.api().columns([2,3]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.header()) )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
    if(column.search() === '^'+d+'$'){
        select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
    } else {
        select.append( '<option value="'+d+'">'+d+'</option>' )
    }
} );
            } );
        }
    } );
} );
          
          }
          
          
        };

        TableManageButtons = function() {
          "use strict";
          return {
          
            init: function() {
              handleDataTableButtons();
            }
          };
        }();    
                    
        TableManageButtons.init();
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