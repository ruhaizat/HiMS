
<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sijil</title>
<link href="/print.css" rel="stylesheet" media="print" type="text/css" />
 <script>
        function printpage() {
        window.print();
        }
      </script>
<div align="right"><button type="submit" name="cetak" id="cetak" class="btn btn-primary" onClick="printpage()"><i class="ace-icon fa fa-print bigger-160"></i>Cetak</button> </div>

<style type="text/css">

@page { margin: 0; }
@media print {
    #Header, #Footer { display: none !important; }
}
.tajuk {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 18px;
  font-color: #333333;
}
.test {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}
.test {
  font-size: 14px;
}
.test {
  font-size: 36px;
}
.test {
  font-size: 16px;
}
.test {
  font-size: 18px;
}
.test {
  font-size: 24px;
}
.test {
  font-size: 22px;
}
.test {
  color: #30C;
}
.test {
  color: #333333;
}
.constantia {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 24px;
  color: #333333;
}
.dengan {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 14px;
  color: #333333;

}
.dengan strong {
  font-size: 18px;
  color: #333333;
}
.nama strong{
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 14px;
  color: #333333;
  line-height: 6px;
}
.ic strong{
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 14px;
  color: #333333;
}
.menyertai {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 14px;
  color: #333333;
}

.point {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 12px;
  color: #333333;
}
.tajuk {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  color: #333333;

}
.tajuk strong {
  color: #333333;
}
.tajuk strong {
  font-size: 23px;
}
.pada {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;
}
.tarikh {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;
}
.bertempat {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;

}
.tempat {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;
}
.penolong {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  font-weight: bold;
  color: #333333;

}
.pengarah {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;
}

.pengarah strong{
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-size: 16px;
  color: #333333;


}
.timbalan {
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}
.timbalan {
  font-size: 16px;
}
.constantia strong em {
  font-size: 40px;
}
body {
  background-color: #FFF;
  background-repeat: no-repeat;
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
</style>
</style>
</head>
<body>
<div class="right_col" role="main">
<table width="90%" border="0" align="left" cellpadding="1" cellspacing="0">
<?php foreach($kursus as $kursus) : ?>
  <tr>
    <td width="76%" align="left">    
    <td width="24%" align="left"><p>&nbsp;</p>
    <p>&nbsp;</p>                
    <td width="24%" align="left">  
  <tr>
    <td align="left">
    <td align="left">    
    <table width="70%" border="0" align="right" cellpadding="1" cellspacing="0">
    <td align="left"><p align="left" class="dengan"><?php echo $kursus['no_siri']; ?></p></table>
    <p align="left">&nbsp;</p>
    </table>
        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="0">
        <tr>
          <td width="30%" align="center" class="timbalan"><table width="90%" border="0" align="left" cellpadding="1" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
              <td><strong class="constantia">CERTIFICATE OF ATTENDANCE</strong>
              <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p align="left" class="dengan">This is to certify that</p>
                <p align="left"><span class="nama"><strong><?php echo $kursus['nama_peserta']; ?></span></strong><br />
              <span class="ic"><strong>NO. K/P : <?php echo $kursus['no_mykad']; ?></span></strong></p>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="91%"><p align="left" class="menyertai">has attended<br />
                <strong>20th Conference And Exhibition On Occupational Safety And Health (2017)<br />
              “OSH Sustainability Through Professionalism”</strong></p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
            
      </p>
      <p align="left"><span class="pada">on<br/>
      </span><strong><span class="tarikh">18 - 19 September 2017</span></strong></p>
      <p align="left" class="bertempat">at</p>
      <p align="left" class="menyertai"><strong>Putrajaya International Convention Centre (PICC)<br/>
      </strong><strong>Putrajaya, Malaysia</strong></p>
      <p align="left"><strong>&nbsp;</strong></p>
      <table width="100%" border="0" cellspacing="0" cellpadding="1">
        <tr>
          <td width="56%" align="center" class="timbalan"><table width="90%" border="0" align="left" cellpadding="1" cellspacing="0">
            <tr>

                <p align="left" class="point"><strong>JKKP IS 127/438/4/KLT1-2017/0205 CEP Approval : 15 points<br />
                CIDBWP/C/2017/0435 Approval : 20 point<br />
                CCD :(238) dlm BEM/REG/12 Jld.4 Approval : 15 point<br />
                KKM : Medical Officer (MO) Approval : 6 point<br />
                Medical Assistant (MA) Approval : 10 point</p>
              <p>&nbsp;</p></strong></td>
            </tr>
          </table></td>
          <td width="64%" align="right" class="pengarah strong"><table width="80%" border="0" align="right" cellpadding="1" cellspacing="0">
            <tr>
              <td align="center" class="pengarah strong"><strong>HAJI ZAHRIM BIN OSMAN</strong><br /> 
              Executive Director
<br /> 
NIOSH MALAYSIA
</td>
            </tr>
          </table></td>
        </tr>
        <?php endforeach; ?> 
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php $this->load->view('admin/partials/admin_footer.php'); ?>
