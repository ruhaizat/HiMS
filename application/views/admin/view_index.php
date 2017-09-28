<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
          <!--  <div class="col-md-12 col-sm-12 col-xs-12">
				  <div class="row tile_count"> 
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Vehicles </span>
						  <div class="count"><?php echo count($kursus); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Employees </span>
						  <div class="count"><?php echo count($employees); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Customer </span>
						  <div class="count"><?php echo count($customers); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
					  	<span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Sold</span>
					  	<div class="count">
					  		<?php $price = 0; ?>
					  		<?php foreach($vehicles as $vehicle) : ?>
					  			<?php $price += $vehicle['selling_price']; ?>
					  		<?php endforeach; ?>
					  		<?= 'BDT ' . $price ?>
					  	</div>
					</div>
				  </div>-->
            </div> <!-- /col --> 
        </div><!-- /row -->


        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">

      <div class="container-fluid"><h2>Dashboard Utama</h2>
           <div class="quick-actions_homepage">
      <ul class="site-stats">
                <li class="bg_ls"><i class="icon-user"></i> <strong><?php echo count($pendeposit); ?></strong> <small>Jumlah Pendeposit</small></li>
                <li class="bg_ls"><i class="icon-plus"></i> <strong><?php echo count($employees); ?></strong> <small>Jumlah Pengguna </small></li>
            
               
              </ul>
            </div>
          </div>
            </div> <!-- /col --> 
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