<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<title>sijil</title>
<style>
.topleftNama {
    position: absolute;
    top: 295px;
    left: 125px;
	font-family: 'Muli', sans-serif;
	font-size: 18px;
	font-weight: Bold;
}
.topleftIC {
    position: absolute;
    top: 320px;
    left: 125px;
    font-size: 18px;
	font-family: 'Muli', sans-serif;
	font-weight: Bold;
}
.topleftNo {
    position: absolute;
    top: 160px;
    left: 930px;
    font-size: 16px;
	font-family: 'Muli', sans-serif;
	font-weight: Bold;
}
</style>
</head>
<body style="margin:0px;">
  <img src="<?php echo base_url();?>assets/images/coshsijilasal.jpg" style="width:100%;">
  <div class="topleftNama"><?php echo $this->session->userdata("nama_pengguna");?></div>
  <?php
  	$idP = $this->session->userdata('id_pengguna');
	$wherStr = "";
	// $result = $this->db->get('vehicles');
	if(strlen($idP) == 12){
		$icnum = substr($idP,0,6).'-'.substr($idP,6,2).'-'.substr($idP,8,4);
	}else{
		$icnum = $this->session->userdata('id_pengguna');
	}
  ?>
  <div class="topleftIC"><?php echo $icnum;?></div>
  <div class="topleftNo"><span style="font-weight:Normal;"></span><?php echo $this->session->userdata("nosiri");?></div>
</body>
</html>
