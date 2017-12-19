<html xmlns="http://www.w3.org/1999/xhtml"><head><style id="stndz-style"></style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Attendance Sheet</title>

	<style>
	.page_a4_body
	{
		width:860px;
		/*height:1122px;*/
		box-sizing:border-box;
		margin:0px auto;
	}
	.my_table tr td
	{
		font-size:12px;
		text-align:center;
		
	}
	.header
	{
		width:100%;
		float:left;
		padding-bottom:2px;
		
	}
	.header h4
	{
		width:100%;
		float:left;
		
	}
	.header p
	{
		width:100%;
		float:left;
		margin:0px;
		
	}
	.header h5
	{
		width:100%;
		float:left;
		margin:0px;
		margin:10px 0px;
		
	}
</style>
<style type="text/css" media="print"> 
.breakAfter{ 
	page-break-after: always; 
} 
</style>
<script language="JavaScript">
	function printPage() {
		if(document.all) {
			document.all.divButtons.style.visibility = 'hidden';
			window.print();
			document.all.divButtons.style.visibility = 'visible';
		} else {
			document.getElementById('divButtons').style.visibility = 'hidden';
			window.print();
			document.getElementById('divButtons').style.visibility = 'visible';
		}
	}
</script>
</head>



<body>
	<div id="divButtons" name="divButtons" align="center">
		<input type="button" value="Print this page" onclick="printPage()" style="font:bold 11px verdana;color:#FF0000;background-color:#FFFFFF;">
	</div>
	<div class="page_a4_body" align="center">
		<div class="header">
			<h2>REGISTER OF ATTENDANCE OF WORKER</h2>
			<p><strong>SPM GROUP INDIA</strong></p>
			<p align="left"><strong>ALL WORKER LIST</strong></p>
			<p style="width:100%; float:left;"><span style="float:left;"> <em>For The Date Of </em> <strong> <?php echo $fromDate ?></strong> <em>Of  </em> <strong> <?php echo $toDate ?></strong></span></p>
			<p align="left">&nbsp;</p>
		</div>
		
		
		<table width="100%" border="1" cellspacing="1" cellpadding="1" class="my_table" style="border-collapse:collapse; clear:both;">
			<tbody><tr>
				<td width="20" rowspan="2"><strong>Sl No.</strong></td>
				<td width="52" rowspan="2"><strong>Roll No.</strong></td>
				<td width="190" rowspan="2" style="text-align:left; padding-left:5px;"><strong>NAME</strong></td>
				<td width="27"><strong>Sig.</strong></td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="11">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="12">&nbsp;</td>
				<td width="33">&nbsp;</td>
			</tr>
			<tr style="border-bottom:2px solid;">
				<td width="27"><strong>Dt.</strong></td>
				<td width="11">1</td>
				<td width="11">2</td>
				<td width="11">3</td>
				<td width="11">4</td>
				<td width="11">5</td>
				<td width="11">6</td>
				<td width="11">7</td>
				<td width="12">8</td>
				<td width="12">9</td>
				<td width="12">10</td>
				<td width="12">11</td>
				<td width="12">12</td>
				<td width="12">13</td>
				<td width="12">14</td>
				<td width="12">15</td>
				<td width="12">16</td>
				<td width="12">17</td>
				<td width="12">18</td>
				<td width="12">19</td>
				<td width="12">20</td>
				<td width="12">21</td>
				<td width="12">22</td>
				<td width="12">23</td>
				<td width="12">24</td>
				<td width="12">25</td>
				<td width="12">26</td>
				<td width="12">27</td>
				<td width="12">28</td>
				<td width="12">29</td>
				<td width="12">30</td>
				<td width="33">31</td>
			</tr>
			<?php //$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
					//echo $this->db->last_query();
					//die;
			$counter=0;
			// $item=$this->student_model->get_report($Stream_Id,$Subject,$Year,0);
			?>
			<?php foreach($employee_list as $list_item): ?>
				<tr>
					<td width="20"><?php echo ++$counter; ?></td>
					<td width="52"><?php echo $counter; ?></td>
					<td colspan="2" style="text-align:left; padding-left:5px;"><?php echo $list_item->fname." ".$list_item->lname; ?></td> 
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="11">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="12">&nbsp;</td>
					<td width="33">&nbsp;</td>
				</tr>
				<?php endforeach; ?>
				</div>


			</body></html>