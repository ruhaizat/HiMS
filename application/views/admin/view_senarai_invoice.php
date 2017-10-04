<?php $this->load->view('admin/partials/admin_header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
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
                <h3>Senarai Inbois</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_title">
                        <h2>Senarai Inbois</h2>
                        <div class="clearfix"></div>
                    </div>
					<div class="x_content">
                        <table class="table table-bordered data-table">
						  <thead>
							<tr>
							  <th>No.</th>
							  <th>Akad No.</th>
							  <th>Name</th>
							  <th>IC.No</th>
							  <th>State</th>
							  <th>Action</th>
							</tr>
						  </thead>
						  <tbody>
							<tr class="gradeX">
							  <td>1</td>
							  <td>A01</td>
							  <td>Mohd Farid bin Mohd Azam</td>
							  <td>790913-10-5107</td>
							  <td>Selangor</td>
							  <td class="center"><a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">View</a>&nbsp;</td>
							</tr>
							<tr class="gradeC">
							 <td>2</td>
							  <td>A02</td>
							  <td>Abidin bin Khairul Ariffin</td>
							  <td>600506-11-5528</td>
							  <td>Perak</td>
							  <td class="center"><a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">View</a>&nbsp;</td>
							</tr>
							<tr class="gradeA">
							  <td>3</td>
							  <td>A03</td>
							  <td>Raihanah binti Sulaiman</td>
							  <td>770321-03-5117</td>
							  <td>Kelantan</td>
							  <td class="center"><a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">View</a>&nbsp;</td>
							 </tr>
							<tr class="gradeA">
							  <td>4</td>
							  <td>A04</td>
							  <td>Abdullah bin Hasbullah Awang</td>
							  <td>500228-06-5910</td>
							  <td>Pahang</td>
							  <td class="center"><a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">View</a>&nbsp;</td>
							</tr>
							<tr class="gradeA">
							  <td>5</td>
							  <td>A05</td>
							  <td>Abdullah bin Hasbullah Awang</td>
							  <td>500228-06-5910</td>
							  <td>Pahang</td>
							  <td class="center"><a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">View</a>&nbsp;</td>
							</tr>

						  </tbody>
						</table>
                    </div> <!-- /content --> 
            </div> <!-- /col --> 
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>
<script>
	$( document ).ready(function() {
		
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
<script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.tables.js"></script>