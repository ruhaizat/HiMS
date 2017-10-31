<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TAX INVOICE</title>
<style>
.tborder{
	border-collapse:collapse;
}
.tborder{
	border:1px solid #8CC63E;
}
.tborder td{
	padding:8px;
}
.tbordereach{
	border-collapse:collapse;
}
.tbordereach td{
	padding:8px;
}
.tbordereach td{
	border:1px solid #8CC63E;
}
.thGreen{
	background-color: #C3DFA6;
}
.thGreenDark{
	background-color: #8CC63E;
}
.font9{
	font-size:9px;
}
.font10{
	font-size:10px;
}
.font11{
	font-size:11px;
}
.font12{
	font-size:12px;
}
.font13{
	font-size:13px;
}
.font14{
	font-size:14px;
}
.font15{
	font-size:15px;
}
.font16{
	font-size:16px;
}
.font18{
	font-size:18px;
}
</style>
</head>
<body>
<div class="font18" style="font-weight:bold;font-family:Arial;position:absolute;left:190px;top:160px;"><?php echo $tarikh;?></div>
<div class="font18" style="font-weight:bold;font-family:Arial;position:absolute;left:60px;top:150px;">TAX INVOICE</div>
<div class="font18" style="font-weight:bold;font-family:Arial;position:absolute;left:180px;top:116px;">|</div>
<div class="font18" style="font-weight:bold;font-family:Arial;position:absolute;left:180px;top:133px;">|</div>
<div class="font18" style="font-weight:bold;font-family:Arial;position:absolute;left:190px;top:140px;">IMARAH HIBAH</div>
<div style="position:absolute;left:610px;"><img src="<?php echo base_url();?>assets/images/logohibah1.png" width="150" height="180" /></div>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<table style="font-family:Arial;">
		<tr>
			<td colspan="3"><br/><br/><br/><br/><br/></td>
		</tr>
		<tr>
			<td colspan="4">
				<table class="tborder font13">
					<tr class="thGreen">
						<td class="tborder" style="font-weight:bold;">Bill To</td>
						<td class="tborder" style="font-weight:bold;">To</td>
					</tr>
					<tr>
						<td class="tborder" style="vertical-align:top;">
							<table>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Customer</td>
									<td style="font-weight:bold;">TABUNG HAJI</td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Customer ID#</td>
									<td>THIM</td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Address</td>
									<td>BAHAGIAN SIMPANAN DAN<br/>
										PENGELUARAN<br/>
										JABATAN KHIDMAT<br/>
										PENDEPOSIT DAN OPERASI<br/>
										LEMBAGA TABUNG HAJI<br/>
										201, JALAN TUN RAZAK,<br/>
										50400 KUALA LUMPUR</td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Phone No</td>
									<td>+603 2054 200 / +603 2054 2233<br/>
										/ +603 2054 2400</td>
								</tr>
							</table>
						</td>
						<td class="tborder" style="vertical-align:top;">
							<table>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Recipient</td>
									<td style="font-weight:bold;">IMARAH HIBAH SDN BHD</td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Address</td>
									<td>NO 1D, 4TH FLOOR, JALAN<br/>
										MEDAN PUSAT 2D, 3B CURVE<br/>
										BUSINESS PARK, PERSIARAN<br/>
										BANGI SECTION 9, 43650<br/>
										BANDAR BARU BANGI,<br/>
										SELANGOR DARUL EHSAN.</td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Phone No</td>
									<td>03-8928 9845/03-8925 7385/4385</td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Account No</td>
									<td><b>BIMB 14032010096540</b><br/>
										(Jalan Tun Razak Branch)</td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">GST No</td>
									<td style="font-weight:bold;">001248579584</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td class="tborder" style="vertical-align:top;">
							<table>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Date</td>
									<td><?php echo $tarikh;?></td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Attention to</td>
									<td>TN HJ MOHD RIDZUAN B HJ WAHI</td>
								</tr>
								<tr>
									<td style="vertical-align:top;font-weight:bold;padding-left:-2px !important;">Ref</td>
									<td><?php echo $nama_kelompok;?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Payment Terms</td>
									<td style="vertical-align:top;">CHEQUE/TT</td>
								</tr>
							</table>
						</td>
						<td class="tborder" style="vertical-align:top;">
							<table>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Date</td>
									<td><?php echo $tarikh;?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Title</td>
									<td>HIBAH AMANAH TH</td>
								</tr>
								<tr>
									<td style="font-weight:bold;padding-left:-2px !important;">Invoice No</td>
									<td><?php echo $no_inbois;?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="4" class="font11"><br/></td>
		</tr>
		<tr>
			<td colspan="4">
				<table class="tbordereach font13">
					<tr class="thGreen">
						<td style="text-align:center;width:40px;font-weight:bold;">QTY.</td>
						<td style="width:300px;text-align:center;font-weight:bold;">DESCRIPTION</td>
						<td style="text-align:center;font-weight:bold;">PRICE PER/UNIT (RM)</td>
						<td style="text-align:center;font-weight:bold;">TOTAL UNIT</td>
						<td style="text-align:center;font-weight:bold;">AMOUNT(RM)</td>
					</tr>
					<tr>
						<td style="text-align:center;font-weight:bold;">1.</td>
						<td colspan="4" style="font-weight:bold;">CHARGES : (including GST)</td>
					</tr>
					<tr>
						<td></td>
						<td style="font-weight:bold;">1.1 SERVICES FEES</td>
						<td style="text-align:right;">35.00</td>
						<td style="text-align:right;"><?php echo $services_fees;?></td>
						<td style="text-align:right;"><?php echo number_format($a_services_fees, 2);?></td>
					</tr>
					<tr>
						<td></td>
						<td style="font-weight:bold;">1.2 GST 6%</td>
						<td style="text-align:right;">2.10</td>
						<td style="text-align:right;"><?php echo $gst;?></td>
						<td style="text-align:right;"><?php echo number_format($a_gst, 2);?></td>
					</tr>
					<tr>
						<td style="text-align:center;">2.</td>
						<td style="font-weight:bold;">DISBURSEMENT :(exempted from GST)</td>
						<td style="text-align:right;">140.00</td>
						<td style="text-align:right;"><?php echo $disbursement;?></td>
						<td style="text-align:right;"><?php echo number_format($a_disbursement, 2);?></td>
					</tr>
					<tr class="thGreenDark">
						<td colspan="4" style="text-align:right;font-weight:bold;color:white;">Subtotal</td>
						<td style="color:white;text-align:right;">RM <?php echo number_format($a_services_fees + $a_gst + $a_disbursement, 2);?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="4" class="font11"><br/></td>
		</tr>
		<tr>
			<td colspan="4" class="font11"><br/></td>
		</tr>
		<tr>
			<td colspan="4" class="font11"><br/></td>
		</tr>
		<tr>
			<td colspan="4" class="font11"><br/></td>
		</tr>
		<tr>
			<td colspan="4" class="font11" style="font-weight:bold;">HAJI MOHD NAJIB BIN ABAS</td>
		</tr>
		<tr>
			<td colspan="4" class="font11" style="font-weight:bold;">MANAGING DIRECTOR</td>
		</tr>
		<tr>
			<td colspan="4" class="font11" style="text-align:center;color:grey;">No 1D, 4th Floor, Jalan Medan Pusat 2D, 3B Curve Business Park, Persiaran Bangi Section 9,</td>
		</tr>
		<tr>
			<td colspan="4" class="font11" style="text-align:center;color:grey;">43650 Bandar Baru Bangi, Selangor Darul Ehsan.</td>
		</tr>
		<tr>
			<td colspan="4" class="font11" style="text-align:center;color:grey;">Tel: 03-8928 9854/03-8925 7385/4385  Fax: 03-8925 8385</td>
		</tr>
	</table>
</div>
</body>
</html>
