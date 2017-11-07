<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include "include/head.php";?>
</head>

<body>
	<?php include "include/header.php";?>
	<section id="mainbody">
		<div class="container">
			<div class="row">
				<?php $emptyData=$this->base_model->check_plant_id()->result() ?>
				<div class="table-responsive" align="center">
					<table class="table table-striped" style="max-width: 80%">
						<?php if (count($emptyData)): ?>
							<?php foreach ($emptyData as $key): ?>
								<tr>
									<td><?php echo $key->fname." ".$key->lname ?></td>
									<td><input type="text" id="txtEmployee<?php echo $key->record_id ?>" class="form-control" placeholder="Enter Plant Employee Id" /></td>
									<td><button class="btn btn-success btn-md" onclick="myfunction('txtEmployee<?php echo $key->record_id ?>',<?php echo $key->record_id ?>)" >Submit</button></td>
								</tr>
							<?php endforeach ?>
						<?php else: ?>
							<tr>
								<td colspan="3" align="center">No Record Found</td>
							</tr>
						<?php endif ?>
						<!-- <tr>
							<td>Ram Rahim</td>
							<td><input type="text" id="" class="form-control" placeholder="Enter Plant Employee Id" /></td>
							<td><button class="btn btn-success btn-md" >Submit</button></td>
						</tr>
						<tr>
							<td>Rahe Maa</td>
							<td><input type="text" id="" class="form-control" placeholder="Enter Plant Employee Id" /></td>
							<td><button class="btn btn-success btn-md" >Submit</button></td>
						</tr> -->
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
<script>
	function myfunction(control,id){
		// alert(document.getElementById(control).value);
		var plantempid=document.getElementById(control).value;
		var recoedid=id;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// document.getElementById("txtArea").value = this.responseText;
          		// alert(this.responseText);
          		if(this.responseText=='done'){
          			alert('Employee Id Update Successfully');
          			window.open('<?php echo base_url(); ?>Index/emp_attendance.html','_self');
          		}
      }
  };
  var url="<?php echo base_url();?>Update/Plant_employee_add/"+plantempid+"/"+recoedid;
  xmlhttp.open("GET", url, true);
  xmlhttp.send();

}
</script>