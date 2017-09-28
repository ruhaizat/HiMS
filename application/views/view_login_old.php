<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/ecertlogin.css'); ?>">
</head>

<body>
    <div id="loginbox" align="center">   
    
                 
         <div class="text" align="center">

            <h2>Log Masuk Sistem E-certificate</h2></div>
       
        <!--logo-->
                  <div align="center" class="loginPage">
                  <h3><img class="img-fluid" src="<?php echo base_url();?>assets/images/logoniosh_small.png" alt="Logo"/></h3></div>
                  <div class="text" align="center"><span>Sila masukkan kata nama (No. MyKad) dan kata laluan</span></div>
            <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">         
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('login/checklogin'); ?>
                            <input placeholder="Email" type="email" name="email"></div>
                        </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">    
                            <input placeholder="Password" type="password" name="password">
                            <section class="links">
                                <span class="pull-right"><button type="submit" class="btn btn-primary">LOG MASUK</span></button>
                                <br><br>
                            </section>
                            </div>
                </div>
        
    </div>
</body>
</html>