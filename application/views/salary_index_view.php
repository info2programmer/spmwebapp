<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "include/head.php";?>
<script type="text/javascript">
       var tableToExcel = (function () {
           var uri = 'data:application/vnd.ms-excel;base64,'
   , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
   , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
   , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
           return function (table, name) {
               if (!table.nodeType) table = document.getElementById(table)
               var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
               window.location.href = uri + base64(format(template, ctx))
           }
       })()
   </script>
</head>

<body>
<?php include "include/header.php";?>
<section id="mainbody">
<div class="container">
<div class="row">
<?php if ($this->session->flashdata('success_log')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>success!</strong> <?php echo $this->session->flashdata('success_log'); ?>
</div>
<?php elseif($this->session->flashdata('error_log')): ?>
<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Error!</strong> <?php echo $this->session->flashdata('error_log'); ?>
</div>
<?php endif ?>
<div class="col-md-12 well" style="padding-bottom:25px;">
<h4 style="font-family: 'Oswald', sans-serif;">Salary Report</h4>
<?php echo  form_open(); ?>
<h6 class="form-signin-heading" style="color:#0080C0;"><i class="fa fa-user-plus"></i> Employee Salary Report</h6>

<label>Select Plant</label>
<select name="ddlPlant" id="ddlPlant" required class="form-control">
	<option value="" hidden selected>----Select Plant----</option>
	<?php foreach ($plant_list as $list): ?>
      <option value="<?php echo $list->factory_id ?>-<?php echo $list->factory_name ?>"><?php echo $list->factory_name ?></option>
    <?php endforeach ?>
</select>

<br />

<label>Form Date</label>
<input type="date" name="txtFromDate" id="txtFromDate" class="form-control">

<br />

<label>To Date</label>
<input type="date" name="txtToDate" id="txtToDate" class="form-control">

<br />

<button class="btn btn-lg btn-success btn-block" type="submit" name="btnSubmit" value="submit">Generate Salary Report</button>



<?php echo form_close(); ?>
<?php if (isset($report_list)): ?>
<div class="row">
<h5 class="text-center alert alert-warning"><strong>Salary Report By <?php echo $from_date ?> to <?php echo $to_date ?> For <?php echo $plant_name ?> Plant</strong></h5>
<button type="button" onclick="tableToExcel('exportTable', 'W3C Example Table');" class="btn btn-danger"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel</button>
<div class="col-md-12">
<div class="table-responsive">
	<table class="table table-bordered" id="exportTable">
		<thead>
			<tr>
				<th>Sl#</th>
				<th>Employee Id</th>
				<th>Employee Name</th>
				<th>Full Day</th>
				<th>Half day</th>
				<th>Over Time</th>
				<th>Days For Salary</th>
				<th>Basic Salary</th>
				<th>House Rent</th>
				<th>EPF</th>
				<th>ESI</th>
				<th>Net Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $count=0; ?>
			<?php foreach ($report_list as $list): ?>
				<tr>
					<td><?php echo ++$count; ?></td>
					<td>SPM/EMP/<?php echo $list->employee_id ?></td>
					<td><?php echo $list->fname." ".$list->lname ?></td>
					<td><?php echo $list->full_day ?> </td>
					<td><?php echo $list->half_day ?> </td>
					<td><?php echo $list->over_timer ?> </td>
					<td><?php echo $list->full_day+($list->half_day/2) ?> </td>
					<td><?php echo $list->base_sal ?> </td>
					<td><?php echo $list->house_rent ?> </td>
					<td><?php echo $list->emp_epf ?> </td>
					<td><?php echo $list->emp_esi ?> </td>
					<td><?php echo ($list->full_day+($list->half_day/2))*($list->base_sal+$list->house_rent-$list->emp_epf-$list->emp_esi) ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
</div>
<?php endif ?>
</div>
