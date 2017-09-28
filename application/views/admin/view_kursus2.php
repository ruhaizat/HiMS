<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>sijil</title>
<script>
window.print();
</script>
<style>
.container {
    position: relative;
}

.topleftNama {
    position: absolute;
    top: 295px;
    left: 125px;
    font-size: 18px;
	font-family: Century Gothic;
	font-weight: Bold;
}
.topleftIC {
    position: absolute;
    top: 320px;
    left: 125px;
    font-size: 18px;
	font-family: Century Gothic;
	font-weight: Bold;
}
.topleftNo {
    position: absolute;
    top: 160px;
    left: 900px;
    font-size: 16px;
	font-family: Century Gothic;
	font-weight: Bold;
}

img { 
    width: 100%;
    height: auto;
}
</style>
</head>
<body>
<div class="container">
  <img src="<?php echo base_url();?>assets/images/cosh_sijil.jpg" alt="Norway" width="1000" height="300">
  <div class="topleftNama"><?php echo $this->session->userdata("nama_pengguna");?></div>
  <div class="topleftIC"><?php echo $this->session->userdata("id_pengguna");?></div>
  <div class="topleftNo"><?php echo $this->session->userdata("nosiri");?></div>
</div>
</body>
</html>
