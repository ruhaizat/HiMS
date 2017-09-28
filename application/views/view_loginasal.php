<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NIOSH/N.I.S.E</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/matrix-login.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <div id="loginbox">  
      <?php echo validation_errors(); ?>
     <?php echo form_open('Login/checklogin'); ?>
    <form id="loginform" class="form-vertical">
    
                   <!--logo-->
              <div align="center" class="loginPage">
                  <h3><img class="img-fluid" src="<?php echo base_url();?>assets/images/logonioshshidi.png" alt="Logo"/>
                  
                  <h2> Aplikasi Bersepadu Perkhidmatan Online NIOSH</h2>
                  <i><strong>Niosh Integrated Online Services System (N.I.S.E)</strong></i></div></br>
                  <br>
                  <br>
                  <div class="text" align="center"><p>Sila masukkan kata nama (No. MyKad/Pasport) dan kata laluan</p></div>
           <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">         
                            <input placeholder="No. MyKad/Pasport" type="text" name="ic"></div>
                        </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">    
                            <input placeholder="Kata Laluan" type="password" name="password">
                            <div class="main_input_box"> 
                             <div><br>
                                <span class="center"><button type="submit" class="btn btn-primary">LOG MASUK</span></button></div>
                                <br><br>
                        </div>    
                    </div>
                </div>
   
       
       
       
     
</body>
</html>



