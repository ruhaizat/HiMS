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

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"">
            <h2>Senarai Dokumen</h2>
            <hr>
            
        <!-- /info 
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div>
                <div>   
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>     
                </div>
                    <br>
                        <p>Berikut adalah senarai sijil tuan/puan yang boleh dimuat turun:</p>
                        <p class="customers"><span class="customers">Tetapan terbaik untuk memuat turun sijil adalah seperti berikut:<br>
                        1. Destination : Save as pdf<br>
                        2. Paper size - A4<br>
                        3. Layout :Landscape<br>
                        4. Margins : None</p>
                        <div class="clearfix"></div>
                        </div>
                              
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        </div>-->
        </div><!-- /info -->
                  
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
            
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>No.</th>
                                  
                                    <th>Tajuk Program</th>
                                    <th>Tarikh</th>
                                    <th>Status Kehadiran</th>
                                    <th>Status Bayaran</th>
                                    <th>No Siri Sijil</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <!--<tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Model</th>
                                    <th>Make</th>
                                    <th>Category</th>
                                    <th>Added on</th>
                                    <th>Status</th>
                                    <th>Bought $</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Sold on</th>
                                </tr>
                            </tfoot>-->
                            <tbody>
                                <?php foreach($kursus as $kursus) : ?>
                                    
                                    <tr class="<?php if($kursus['kod_stsbyrn'] != "2")?>">
                                    
                                        <td>1.</td>
                                        <!--<td><?php echo $kursus['nama_sts']; ?></td>-->
                                        <td><?php echo $kursus['nama_kursusbi']; ?></td>
                                        <td><?php echo $kursus['tarikh1_kursus']; ?> - <?php echo $kursus['tarikh2_kursus']; ?></td>
                                        
                                        <td><?php echo $kursus['nama_sts']; ?></td>
                                        <td><?php echo $kursus['nama_sts_bayaran']; ?></td>
                                        <td><?php $this->session->set_userdata('nosiri',$kursus['no_siri']); echo $kursus['no_siri']; ?></td>
                                        <td>
										<?php if($kursus['kod_sts_bayaran'] != 2):?>
										<a class="btn btn-primary" href="<?php echo base_url();?>Admin/kursus/pdf">   <i class="ace-icon fa fa-download"></i> Muat Turun</a>
										<a class="btn btn-primary" target="blank" href="<?php echo base_url();?>Admin/kursus/cetakpdf">   <i class="ace-icon fa fa-print"></i> Cetak Sijil</a>
										<?php endif;?>
										</td>
                                        <!--<td width="100">
                                            <img class="img-responsive" src="<?php //echo base_url()."uploads/".$vehicle['image']; ?>"></td>
                                        <td>
                                            <?php if($vehicle['status']=="available") : ?>
                                                <?php //echo form_open('admin/vehicles/sell/'); ?>
                                                    <input type="hidden" name="vehicle_id" value="<?php //echo $vehicle['vehicle_id']; ?>">
                                                    <button class="btn btn-xs btn-success" type="submit" name="btn-sell">Sell</button>
                                                </form> 
                                            <?php endif ?>
                                                    
                                            <?php if ($this->session->userdata('type') =="admin") : ?>
                                                
                                                <?php echo form_open('Admin/Vehicles/DeleteVehicle/'); ?>
                                                    <input type="hidden" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>">
                                                    <button onclick="return confirm('Records of this Vehicle will be deleted, continue?')" class="btn btn-xs btn-danger" type="submit" name="btn-delete">Delete</button>
                                                </form>             
                                            <?php endif; ?>
                                        </td>
                                        <td><?php if($vehicle['sold_date']=== NULL){ echo 'Not Sold'; }else{ $date = new DateTime($vehicle['sold_date']); echo $date->format('m/d/Y'); }?></td>-->
                                                    
                                    </tr>
                                <?php endforeach; ?>     
                            </tbody>
                        </table>
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
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