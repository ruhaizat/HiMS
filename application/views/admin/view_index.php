<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
           <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">

      <div class="container-fluid"><h2>Utama</h2>
           <div class="quick-actions_homepage">
      <ul class="site-stats">
                <li class="bg_ls"><i class="icon-user"></i> <strong><?php echo count($pendeposit); ?></strong> <small>Jumlah Pendeposit</small></li>
                <li class="bg_ls"><i class="icon-plus"></i> <strong><?php echo count($employees); ?></strong> <small>Jumlah Pengguna </small></li>
            
               
        </ul><br><br>
         <p><b>Notifikasi: Dokumen Lebih Masa (>30 hari)</b></p>
         <br>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="3" width="100%">
                            <thead>
                                 <tr>
                                    <th>#</th>
                                  
                                    <th>No Inbois</th>
                                    <th>No Kelompok</th>
                                    <th colspan="1">Tarikh</th>
                                    <th>Jumlah Dokumen</th>
                                    <th>Amaun(RM)</th>
                                   
                                </tr>
                            </thead>
                            
                            <tbody>
                                  <td>1</td>
                                  <td>IH0001/2017</td>
                                  <td>1</td>
                                  <td>16/06/2017</td>
                                  <td>7</td>
                                  <td></td>
                                 
                            </tbody>
                        </table>
                        <br>
                        
        <p><b>Notifikasi: Dokumen Hampiri Masa (>20 hari)</b></p>
         <br>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>#</th>
                                  
                                    <th>No Inbois</th>
                                    <th>No Kelompok</th>
                                    <th>Tarikh</th>
                                    <th>Jumllah Dokumen</th>
                                    <th>Amaun(RM)</th>
                                   
                                </tr>
                            </thead>
                           
                            <tbody>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                 
                            </tbody>
                        </table>        
             </div>
            
    </div>
          
          
            
            </div> <!-- /col --> 
            
        </div><!-- /row -->


       
        </div> <!-- /row -->
        


    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>

<script>
	// Bar chart
	var ctx = document.getElementById("mybarChart");
	var mybarChart = new Chart(ctx, {
	  type: 'bar',
	  data: {
	    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
	    datasets: [{
	      label: 'Invest $',
	      backgroundColor: "#26B99A",
	      data: [0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0,  34000500]
	    }, {
	      label: 'Sold $',
	      backgroundColor: "#03586A",
	      data: [0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0,  25000200]
	    }]
	  },

	options: {
	    scales: {
	      yAxes: [{
	        ticks: {
	          beginAtZero: true
	        }
	      }]
	    }
	  }
	});

</script>