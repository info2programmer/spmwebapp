<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/head.php");?>
</head>

<body>
<?php include("include/header.php");?>

<section id="dashboardbody">
<div class="container">
	<div class="row">
    	
        
        <div class="col-md-4"><div class="alert alert-info text-center" style="color:#0080C0;  font-size:16px;"><i class="fa fa-map-marker" style="font-size:20px;"></i><br />Total Locations<br /><span style="color:#FF3333; font-size:20px; font-weight:normal;">16</span></div></div>
        
        <div class="col-md-4"><div class="alert alert-info text-center" style="color:#0080C0;  font-size:16px;"><i class="fa fa-industry" style="font-size:20px;"></i><br />Total Factories<br /><span style="color:#FF3333; font-size:20px; font-weight:normal;">26</span></div></div>
        
        <div class="col-md-4"><div class="alert alert-info text-center" style="color:#0080C0;  font-size:16px;"><i class="fa fa-users" style="font-size:20px;"></i><br />Total Employees<br /><span style="color:#FF3333; font-size:20px; font-weight:normal;"><?php echo $empDtl;?></span></div></div>
        
        

        
	</div>
</div>
</section> <!-------------------Dashboardbody ----------------------------------------------------------------->

<?php include "include/footer.php";?>

</body>
</html>





