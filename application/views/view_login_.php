<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NISE</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/matrix-login.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<style>
.rounded {
    padding: 20px 50px 40px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 0px 9px #999999;
    /* background: #fff; */
  }

.full-width {
    width: 80%;
    height: 25px;
    margin: auto;

}

.wrapper {
    width: 900px;
    margin: auto;
}
.innerLogin {
    width: 330px;
}
.newLogin {
    font-family: "OpenSans", Arial, sans-serif;
    font-size: 14px;
    margin: auto;
    float: left;
    border-right: 1px solid #dadada;
    width: 387px;
    height: 400px;
}
.newAnnounce {
    width: 450px;
    margin: auto;
    float: right;
    height: 350px;
}

.info {
    font-family: "Arial", Arial, serif;
    font-style: italic;
    font-weight: 100;
    font-size: 14px;
}

.fontlogin2 {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #333333;
    line-height: 1.428571429;
    font-size: 14px;
    font-weight: 100;
    
}
.fontlogin3 {
    color: #333333;
    font-size: 20px;
    font-weight: 100;
    margin: 30px 0;
}

.fontlogin4 {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #333333;
    line-height: 1.2;
    font-size: 12px;
    font-weight: 100;
    margin: 30px 0;
}

</style>
<body>
    
    <div class="wrapper rounded"> 
      <div class="newLogin" >  
        <div class="innerLogin" align="center"> 
          <?php echo validation_errors(); ?>
          <?php echo form_open('Login/checklogin'); ?>
          <form id="loginform" class="form-vertical">
    
          <!--logo-->
            <div align="center" class="loginPage">
                    <img class="img-fluid" src="<?php echo base_url();?>assets/images/logohibah1.png" alt="Logo"/>
                <p class="fontlogin3"><strong> Aplikasi Bersepadu Perkhidmatan Online NIOSH</strong><br>

                <span class="info">Niosh Integrated Online Services System (N.I.S.E)</p></span>
            </div>

            <div class="fontlogin2" align="center"><p>Sila masukkan kata nama (No. MyKad/Pasport) dan kata laluan</p>
            </div>

          <!--Katanama dan Katalaluan-->
            <div class="control-group" align="center">
              <div class="controls">
                  <div class="main_input_box">         
                    <input placeholder="No. MyKad/Pasport" type="text" name="ic" class="full-width">
                  </div>
              </div>
            </div>

            <br>
            <div class="control-group" align="center">
              <div class="controls">
                  <div class="main_input_box">   
                  <input placeholder="Kata Laluan" type="password" name="password" class="full-width">
              </div>

            </div>
                <br>
                  <span class="center"><button type="submit" class="btn btn-primary">LOG MASUK</span></button>
                </div>
              </div>
            </div>

              <div class="newAnnounce">
                <br>
                  <h2 class="fontlogin3"><strong>N.I.S.E</strong>
                  </h2>
                  <div align="left" class="loginPage"></div>
                    <p class="fontlogin2" align="justify">N.I.S.E adalah perkhidmatan atas talian yang disediakan oleh NIOSH kepada pengguna untuk membuat capaian kepada maklumat latihan, peperiksaan dan sijil.</p>
                    <br> 
                  </div>   
              </div>             
</body>
</html>



