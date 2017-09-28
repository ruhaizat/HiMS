<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMARAH HIBAH</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/login.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/matrix-login.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/bootstrap-responsive.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/login.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="loginPage">    
        <header>
            <img class="right" src="<?php echo base_url();?>assets/images/logohibahlogin.png" alt="Logo"/>
        </header>
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('Login/checklogin'); ?>
            <input placeholder="No. MyKad/Pasport" type="text" name="ic">
            <input placeholder="Kata Laluan" type="password" name="password">
            <section class="links">
                <button class="button"><span>LOGIN</span></button>
                <br><br>
            </section>
        </form>
    </div>
</body>
</html>