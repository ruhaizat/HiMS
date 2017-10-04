<?php $this->load->view('admin/partials/admin_header.php'); ?>
<script>
	function changePwd(){
				var pUserID = $("#hID").val();
				var pCurrentPassword = $("input[name=oldpwd]").val();
				var pNewPassword = $("input[name=newpwd]").val();
				var pConfirmNewPassword = $("input[name=newpwd2]").val();
				
					if(pCurrentPassword == ""){
						$("#oldpwdnoti").show();
						$("#oldpwdnoti").text("Sila masukkan kata laluan lama");
						$("#newpwdnoti").hide();
						$("#newpwd2noti").hide();
					}else{
						var datastr = '{"mode":"CheckCurrentPassword","Password":"'+pCurrentPassword+'","UserID":"'+pUserID+'"}';
						$.ajax({
							url: "<?php echo base_url();?>Admin/ChangePwd/ajax",
							type: "POST",
							data: {"datastr":datastr},
							success: function(data){
								if(data == "Passed"){
									if(pNewPassword == ""){
										$("#oldpwdnoti").hide();
										$("#newpwdnoti").show();
										$("#newpwdnoti").text("Sila masukkan kata laluan baru");
										$("#newpwd2noti").hide();
									}else{
										if(pNewPassword != pConfirmNewPassword){
											$("#oldpwdnoti").hide();
											$("#newpwdnoti").hide();
											$("#newpwd2noti").show();
											$("#newpwd2noti").text("Pengesahan kata laluan baru gagal");
										}else{
											var datastr = '{"mode":"UpdatePassword","Password":"'+pNewPassword+'","UserID":"'+pUserID+'"}';
											$.ajax({
												url: "<?php echo base_url();?>Admin/ChangePwd/ajax",
												type: "POST",
												data: {"datastr":datastr},
												success: function(data){
													$("#oldpwdnoti").hide();
													$("#newpwdnoti").hide();
													$("#newpwd2noti").hide();
													alert("Kata laluan telah berjaya ditukar!");
												}
											});
										}
									}
								}else if(data == "Current password wrong."){
									$("#oldpwdnoti").show();
									$("#oldpwdnoti").text("Kata laluan lama salah. Cuba lagi");
									$("#newpwdnoti").hide();
									$("#newpwd2noti").hide();
								}

							}
						});
					}
	}
</script>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <h2>Tukar Kata Laluan</h2>
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_250">
                    <div class="">
                        <ul class="nav navbar-right panel_toolbox">
                        <li></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <span>Sila sahkan kata laluan lama dan masukkan kata laluan baru.</span>
                    <p>
						<input type="hidden" id="hID" value="<?php echo $user['id']?>" />
						
						<div class="controls">Kata Laluan Lama :
							<div class="main_input_box">     
								<input placeholder="******" type="password" name="oldpwd">
								<span id="oldpwdnoti" style="color:red;"></span>
							</div>
						</div>
						<br/>
						<div class="controls">Kata Laluan Baru :   
							<div class="main_input_box">    
							<input placeholder="******" type="password" name="newpwd">
								<span id="newpwdnoti" style="color:red;"></span>
							</div>
						</div>
						<br/>
						<div class="controls">Sahkan kata laluan baru :  
							<div class="main_input_box">
								<input placeholder="******" type="password" name="newpwd2">
								<span id="newpwd2noti" style="color:red;"></span>
							</div>
						</div>
						<br/>
						<div class="controls">
							<div class="main_input_box">         
								<input class="btn btn-primary" type="button" value="Tukar Kata Laluan" onclick="changePwd();">
								<input class="btn btn-primary" type="button" value="Set Semula" onclick="changePwd();">
								
							</div>
						</div>
					</p>
                    <div class="clearfix"></div>
                </div>        
                <ul class="nav navbar-right panel_toolbox"></ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
		</div>
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>